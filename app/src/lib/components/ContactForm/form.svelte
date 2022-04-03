<script lang="ts">
  import Button from '$lib/components/Button/button.svelte';

  enum InputFieldType {
    Email = 'email',
    Phone = 'tel',
    Text = 'text'
  }

  let formSentSuccessful = null;

  let formData: ContactForm = {
    firstName: '',
    lastName: '',
    phone: '',
    email: '',
    comments: '',
    methodPhone: false,
    methodText: false,
    methodEmail: false
  };

  let formError = {
    firstName: false,
    lastName: false,
    phone: false,
    email: false,
    comments: false,
    methodPhone: false,
    methodText: false,
    methodEmail: false
  };

  const placeholderText = {
    firstName: 'John',
    lastName: 'Smith',
    phone: '555-555-5555',
    email: 'example@email.com',
    comments: 'Comments and questions here...'
  };

  const fieldIsValid = {
    firstName: (v: string) => !!v,
    lastName: (v: string) => !!v,
    phone: (v: string) => !!v && v.length > 9,
    email: (v: string) => !!v,
    comments: () => true,
    methodPhone: () => true,
    methodText: () => true,
    methodEmail: () => true
  };

  const handleFieldChange = (value = '', name: string) => {
    formData[name] = value;
    formError[name] = false;
  };

  const determineInputType = (key: string): InputFieldType => {
    switch (key) {
      case 'email':
        return InputFieldType.Email;
      case 'phone':
        return InputFieldType.Phone;
      default:
        return InputFieldType.Text;
    }
  };

  const formatFieldLabel = (label: string) => {
    if (label.endsWith('Name')) {
      const [firstLast] = label.split('N');
      return `${firstLast.charAt(0).toUpperCase()}${firstLast.slice(1).toLowerCase()} Name:`;
    }
    return `${label.charAt(0).toUpperCase()}${label.slice(1).toLowerCase()}`;
  };

  const preSubmitValidation = (data: ContactForm) => {
    return Object.keys(data).reduce((isValid, fieldName) => {
      if (!isValid) return isValid;
      const fieldClean = fieldIsValid[fieldName](data[fieldName]);
      formError[fieldName] = !fieldClean;

      return fieldClean;
    }, true);
  };

  async function submit() {
    // start submit
    const shouldSubmit = preSubmitValidation(formData);

    if (shouldSubmit) {
      try {
        const headers = new Headers();
        const response = await fetch('/mailer.php', {
          method: 'POST',
          body: JSON.stringify(formData),
          headers
        });
        const data = await response.json();
        formSentSuccessful = data;
      } catch (error) {
        console.log('error:::', error);
      } finally {
        console.log('we are all done');
      }
    }
    // end submit
  }
</script>

<form>
  <h3>Contact Us Today!</h3>
  <legend> <span>*</span> = Required </legend>

  {#if !formSentSuccessful}
    {#each Object.keys(placeholderText).filter((key) => key !== 'comments') as dataKey}
      <fieldset class:is-error={formError[dataKey]}>
        <label for={dataKey}
          >{formatFieldLabel(dataKey)}<sup>*</sup>
          <input
            id={dataKey}
            type={determineInputType(dataKey)}
            placeholder={placeholderText[dataKey]}
            on:change={(event) => {
              const {
                // @ts-ignore
                target: { value }
              } = event;
              handleFieldChange(value, dataKey);
            }}
          />
        </label>
        {#if formError[dataKey]}
          <span>This field is required</span>
        {/if}
      </fieldset>
    {/each}

    <fieldset class="checklist">
      <div>Preferred Contact Method:</div>
      <label>
        Phone <input
          type="checkbox"
          name="method-phone"
          id="methodPhone"
          bind:checked={formData.methodPhone}
        />
      </label>
      <label>
        Text<input
          type="checkbox"
          name="method-text"
          id="methodText"
          bind:checked={formData.methodText}
        />
      </label>
      <label>
        Email <input
          type="checkbox"
          name="method-email"
          id="methodEmail"
          bind:checked={formData.methodEmail}
        />
      </label>
    </fieldset>

    <fieldset>
      <label>
        Additional Questions:
        <textarea
          rows="10"
          placeholder="Comments and questions here..."
          bind:value={formData.comments}
        />
      </label>
    </fieldset>

    <span class="btn-submit">
      <Button class="button" label="submit" on:click={submit} alt>Submit</Button>
    </span>
  {:else}
    <div>Thanks, someone will contact you soon!</div>
  {/if}
</form>

<style>
  .btn-submit {
    width: 100%;
    display: block;
    padding: 0 14px;
  }
  .btn-submit :global(.button) {
    max-width: 100%;
    width: 100%;
    border-radius: 5px;
  }
  .btn-submit:hover {
    cursor: pointer;
  }
  legend {
    font-size: 1.2rem;
  }
  sup,
  span {
    color: #ff6347;
  }
  .is-error input,
  .is-error span {
    border-color: #ff6347;
  }
  .is-error span {
    color: #ff6347;
  }
  .is-error span,
  label {
    font-size: 1.6rem;
    font-weight: 700;
    font-family: var(--font-family-header);
  }
  form {
    height: 100%;
    width: 100%;
    padding: 2.5rem 1.5rem;
    border-radius: 1rem;
    border: 1px solid var(--secondary);
    background-color: var(--primary);
    color: var(--white);
    text-align: center;
  }
  fieldset {
    text-align: left;
    border: none;
  }
  input:not([type='checkbox']),
  textarea {
    display: block;
    width: 100%;
    font-size: 1.8rem;
    padding: 0.2rem 0.7rem;
    border-radius: 0.5rem;
    margin-top: 0.3rem;
  }
  .checklist {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: min-content min-content;
  }
  .checklist div {
    width: 100%;
    grid-column: 1 / -1;
  }

  @media (max-width: 1300px) {
    .checklist {
      max-width: 300px;
    }
  }
</style>

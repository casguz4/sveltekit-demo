/// <reference types="@sveltejs/kit" />

// See https://kit.svelte.dev/docs/types#the-app-namespace
// for information about these interfaces
declare namespace App {
	// interface Locals {}
	// interface Platform {}
	// interface Session {}
	// interface Stuff {}
}
type NavItem = {
	label: string
	target: string
}

type ContactForm = {
	firstName: string,
	lastName: string,
	phone: string,
	email: string,
	comments: ?string,
	methodPhone: boolean,
	methodText: boolean,
	methodEmail: boolean
}

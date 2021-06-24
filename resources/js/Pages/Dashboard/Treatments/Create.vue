<template>
    <app-layout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Create a new treatment
                </h2>
            </div>
        </template>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <!-- Generate API Token -->
            <jet-form-section @submitted="createTreatment()">
                <template #title>
                    Treatment information
                </template>

                <template #description>
                    Enter the required information to create a new treatment.
                </template>

                <template #form>
                    <!-- Enabled -->
                    <div class="col-span-6">
                        <jet-label for="enabled" value="Enabled" />
                        <jet-checkbox v-model:checked="createTreatmentForm.enabled" id="enabled" />
                        <jet-input-error :message="createTreatmentForm.errors.enabled" class="mt-2" />
                    </div>

                    <!-- In menu -->
                    <div class="col-span-6">
                        <jet-label for="in_menu" value="Show in main menu" />
                        <jet-checkbox v-model:checked="createTreatmentForm.in_menu" id="in_menu" />
                        <jet-input-error :message="createTreatmentForm.errors.in_menu" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="col-span-6">
                        <jet-label for="title" value="Title" />
                        <jet-input v-model="createTreatmentForm.title" id="title" type="text" class="mt-1 block w-full" autofocus />
                        <jet-input-error :message="createTreatmentForm.errors.title" class="mt-2" />
                    </div>

                    <!-- Slug -->
                    <div class="col-span-6">
                        <jet-label for="slug" value="Slug" />
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                <span class="hidden sm:flex">https://nikkinailsandmore.nl</span>/
                            </span>
                            <jet-input
                                v-model="createTreatmentForm.slug"
                                id="slug"
                                type="text"
                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                            />
                        </div>
                        <jet-input-error :message="createTreatmentForm.errors.slug" class="mt-2" />
                        <p class="mt-2 text-sm text-gray-500">
                            This field will be autofilled when kept empty! Do not use spaces in your input, use an <span class="text-red-600 bg-gray-100 border border-gray-200 px-2 rounded">-</span> to bind words.
                        </p>
                    </div>

                    <!-- Title -->
                    <div class="col-span-6">
                        <jet-label for="content" value="Content" />
                        <div class="mt-1">
                            <textarea
                                v-model="createTreatmentForm.content"
                                id="content"
                                rows="6"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                placeholder="Page content"
                            />
                        </div>
                        <jet-input-error :message="createTreatmentForm.errors.content" class="mt-2" />
                    </div>
                </template>

                <template #actions>
                    <jet-action-message :on="createTreatmentForm.recentlySuccessful" class="mr-3">
                        Created.
                    </jet-action-message>

                    <jet-button :class="{ 'opacity-25': createTreatmentForm.processing }" :disabled="createTreatmentForm.processing">
                        Create
                    </jet-button>
                </template>
            </jet-form-section>

<!--            <div class="hidden sm:block" aria-hidden="true">-->
<!--                <div class="py-5">-->
<!--                    <div class="border-t border-gray-200"></div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="mt-10 sm:mt-0">-->
<!--                <div class="md:grid md:grid-cols-3 md:gap-6">-->
<!--                    <div class="md:col-span-1">-->
<!--                        <div class="px-4 sm:px-0">-->
<!--                            <h3 class="text-lg font-medium leading-6 text-gray-900">Additional Information</h3>-->
<!--                            <p class="mt-1 text-sm text-gray-600">-->
<!--                                Here you can find additional information about the data we store in the database.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-5 md:mt-0 md:col-span-2">-->
<!--                        <form action="#" method="POST">-->
<!--                            <div class="shadow overflow-hidden sm:rounded-md">-->
<!--                                <div class="px-4 py-5 bg-white sm:p-6">-->
<!--                                    <div class="grid grid-cols-6 gap-6">-->
<!--                                        <div class="col-span-6 sm:col-span-3">-->
<!--                                            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>-->
<!--                                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6 sm:col-span-3">-->
<!--                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>-->
<!--                                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6 sm:col-span-4">-->
<!--                                            <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>-->
<!--                                            <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6 sm:col-span-3">-->
<!--                                            <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>-->
<!--                                            <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">-->
<!--                                                <option>United States</option>-->
<!--                                                <option>Canada</option>-->
<!--                                                <option>Mexico</option>-->
<!--                                            </select>-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6">-->
<!--                                            <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>-->
<!--                                            <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">-->
<!--                                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>-->
<!--                                            <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">-->
<!--                                            <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>-->
<!--                                            <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->

<!--                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">-->
<!--                                            <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>-->
<!--                                            <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">-->
<!--                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">-->
<!--                                        Save-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetFormSection from '@/Jetstream/FormSection'
    import JetInput from '@/Jetstream/Input'
    import JetInputError from '@/Jetstream/InputError'
    import JetLabel from '@/Jetstream/Label'
    import JetActionMessage from '@/Jetstream/ActionMessage'
    import JetButton from '@/Jetstream/Button'
    import JetCheckbox from '@/Jetstream/Checkbox'

    export default {
        components: {
            AppLayout,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetActionMessage,
            JetButton,
            JetCheckbox
        },

        props: {
            treatments: {
                type: Array
            }
        },

        data() {
            return {
                createTreatmentForm: this.$inertia.form({
                    enabled: true,
                    in_menu: true,
                    title: null,
                    slug: '',
                    content: '',
                }, {
                    bag: 'createTreatmentChannel',
                    resetOnSuccess: false,
                }),
            }
        },

        methods: {
            createTreatment: function () {

            }
        }
    }
</script>

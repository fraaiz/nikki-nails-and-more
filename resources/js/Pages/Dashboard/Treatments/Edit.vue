<template>
    <app-layout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Edit the treatment {{ treatment.title }}
                </h2>
            </div>
        </template>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <!-- Generate API Token -->
            <jet-form-section @submitted="updateTreatment()">
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
                        <jet-checkbox v-model:checked="updateTreatmentForm.enabled" id="enabled" />
                        <jet-input-error :message="updateTreatmentForm.errors.enabled" class="mt-2" />
                    </div>

                    <!-- In menu -->
                    <div class="col-span-6">
                        <jet-label for="in_menu" value="Show in main menu" />
                        <jet-checkbox v-model:checked="updateTreatmentForm.in_menu" id="in_menu" />
                        <jet-input-error :message="updateTreatmentForm.errors.in_menu" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="col-span-6">
                        <jet-label for="title" value="Title" />
                        <jet-input v-model="updateTreatmentForm.title" id="title" type="text" class="mt-1 block w-full" autofocus />
                        <jet-input-error :message="updateTreatmentForm.errors.title" class="mt-2" />
                    </div>

                    <!-- Slug -->
                    <div class="col-span-6">
                        <jet-label for="slug" value="Slug" />
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                <span class="hidden sm:flex">https://nikkinailsandmore.nl</span>/
                            </span>
                            <jet-input
                                v-model="updateTreatmentForm.slug"
                                id="slug"
                                type="text"
                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                            />
                        </div>
                        <jet-input-error :message="updateTreatmentForm.errors.slug" class="mt-2" />
                        <p class="mt-2 text-sm text-gray-500">
                            This field will be autofilled when kept empty! Do not use spaces in your input, use an <span class="text-red-600 bg-gray-100 border border-gray-200 px-2 rounded">-</span> to bind words.
                        </p>
                    </div>

                    <!-- Title -->
                    <div class="col-span-6">
                        <jet-label for="content" value="Content" />
                        <div class="mt-1">
                            <textarea
                                v-model="updateTreatmentForm.content"
                                id="content"
                                rows="6"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                placeholder="Page content"
                            />
                        </div>
                        <jet-input-error :message="updateTreatmentForm.errors.content" class="mt-2" />
                    </div>
                </template>

                <template #actions>
                    <div class="flex justify-between w-full">
                        <p class="flex-none text-sm text-gray-400 mt-1.5">
                            Last edited at <span class="font-black">{{ treatment.lastEdited }}</span> by <span class="font-black">{{ treatment.last_edited_by.name }}</span>
                        </p>
                        <div class="flex-none flex">
                            <jet-action-message :on="updateTreatmentForm.recentlySuccessful" class="mr-3 mt-1.5">
                                Updated.
                            </jet-action-message>

                            <jet-button :class="{ 'opacity-25': updateTreatmentForm.processing }" :disabled="updateTreatmentForm.processing">
                                Save
                            </jet-button>
                        </div>
                    </div>
                </template>
            </jet-form-section>
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
            treatment: {
                type: Object
            }
        },

        data() {
            return {
                updateTreatmentForm: this.$inertia.form({
                    enabled: this.treatment.enabled,
                    in_menu: this.treatment.in_menu,
                    title: this.treatment.title,
                    slug: this.treatment.slug,
                    content: this.treatment.content,
                }, {
                    resetOnSuccess: false,
                }),
            }
        },

        methods: {
            updateTreatment: function () {
                this.updateTreatmentForm.post(route('dashboard::treatments.update', this.treatment.id), {
                    preserveScroll: true,
                    preserveState: true,
                })
            }
        }
    }
</script>

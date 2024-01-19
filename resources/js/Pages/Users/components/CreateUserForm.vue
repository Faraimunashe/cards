<template>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form @submit.prevent="submit">
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputIconLeft">Email address</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <EnvelopeIcon class="icon icon-xs text-gray-600"/>
                                        </span>
                                        <input type="email" v-model="form.email" class="form-control" :class="{'is-invalid':form.errors.email}" placeholder="email address">
                                    </div>
                                    <div class="invalid-feedback" v-if="form.errors.email">
                                        {{ form.errors.email }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputIconLeft">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <KeyIcon class="icon icon-xs text-gray-600"/>
                                        </span>
                                        <input type="password" v-model="form.password" class="form-control" :class="{'is-invalid':form.errors.password}" placeholder="password">
                                    </div>
                                    <div class="invalid-feedback" v-if="form.errors.password">
                                        {{ form.errors.password }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputIconLeft">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <UserIcon class="icon icon-xs text-gray-600"/>
                                        </span>
                                        <input type="text" v-model="form.name" class="form-control" :class="{'is-invalid':form.errors.name}" placeholder="username">
                                    </div>
                                    <div class="invalid-feedback" v-if="form.errors.name">
                                        {{ form.errors.name }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputIconLeft">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <KeyIcon class="icon icon-xs text-gray-600"/>
                                        </span>
                                        <input type="password" v-model="form.password_confirmation" class="form-control" :class="{'is-invalid':form.errors.password_confirmation}" placeholder="confirm password">
                                    </div>
                                    <div class="invalid-feedback" v-if="form.errors.password_confirmation">
                                        {{ form.errors.password_confirmation }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 mb-lg-5">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button class="btn w-100 btn-primary text-dark" type="submit" :disabled="form.processing">
                                    Create account
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { EnvelopeIcon, KeyIcon, UserIcon } from '@heroicons/vue/24/solid';
    import { router, useForm } from '@inertiajs/vue3';

    let form = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: ''
    });

    let submit = () => {
        form.post('/users/create')
    }
</script>

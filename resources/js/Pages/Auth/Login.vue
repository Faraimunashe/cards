<template>
    <Head title="Login" />
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="../../../assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-lg border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Sign in to CARDCRAFT PRO</h1>
                        </div>
                        <!-- <x-alert /> -->
                        <form @submit.prevent="submit" class="mt-4">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <EnvelopeIcon class="icon icon-xs text-gray-600"/>
                                    </span>
                                    <input type="email" v-model="form.email" class="form-control" :class="{'is-invalid':form.errors.email}" placeholder="Email address" autofocus required>
                                </div>
                                <div class="invalid-feedback" v-if="form.errors.email">
                                    {{ form.errors.email }}
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Your Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <KeyIcon class="icon icon-xs text-gray-600"/>
                                        </span>
                                        <input type="password" v-model="form.password" placeholder="Password" class="form-control" :class="{'is-invalid':form.errors.password}" required>
                                    </div>
                                    <div class="invalid-feedback" v-if="form.errors.password">
                                        {{ form.errors.password }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800" :disabled="form.processing">Login Account</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                Facing problems?
                                <Link href="" class="fw-bold">Forgot password</Link>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { EnvelopeIcon, KeyIcon } from '@heroicons/vue/24/solid';
import { useForm } from '@inertiajs/vue3';

let form = useForm({
    email: '',
    password: ''
});

let submit = () => {
    form.post('/login')
}

</script>

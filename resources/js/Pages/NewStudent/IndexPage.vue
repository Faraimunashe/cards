<template>
    <Head title="New Student" />
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="/dashboard">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Student</li>
                </ol>
            </nav>
            <h2 class="h4">New Student</h2>
            <p class="mb-0">Check if student is registered.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div v-if="form.errors.error" class="alert alert-danger" role="alert">
                        {{ form.errors.error }}
                    </div>
                    <form @submit.prevent="submit">
                        <div class="row mb-4">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <div class="input-group mt-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <UserIcon class="icon icon-xs text-gray-600"/>
                                        </span>
                                        <input type="text" v-model="form.regnum" class="form-control" :class="{'is-invalid':form.errors.regnum}" placeholder="Student regnum ..." required>
                                    </div>
                                    <div class="invalid-feedback" v-if="form.errors.regnum">
                                        {{ form.errors.regnum }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn w-100 btn-primary text-dark" type="submit" :disabled="form.processing">
                                    Find Student
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { UserIcon } from '@heroicons/vue/24/solid';
import Layout from '../../Shared/Layout.vue';
export default {
    layout: Layout,
    components: {
        UserIcon
    }
}
</script>

<script setup>
    import { useForm } from '@inertiajs/vue3';

    let form = useForm({
        regnum: ''
    });

    let submit = () => {
        form.post('/confirm-student')
    }
</script>

<template>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <Link href="/dashboard">
                            <HomeIcon class="icon icon-xxs" />
                        </Link>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">Confirm Student</a></li>
                </ol>
            </nav>
            <h2 class="h4">Confirm Student Information</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal-default">
                <PlusIcon class="icon icon-xs me-2" />
                Print
            </a>
        </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div v-if="imageError" class="alert alert-danger" role="alert">
                    Upload student image to proceed!
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow">
        <div class="row">
            <div class="col-md-4">
                <div v-if="imageError">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage" src="../../../assets/images/image-placeholder.jpg"
                            alt="example placeholder" style="width: 300px;"
                        />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1" for="customFile1">Choose image</label>
                            <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')"/>
                        </div>
                    </div>
                </div>
                <div class="avatar-xlg m-2" v-else>
                    <img @error="handleImageError" class="rounded" alt="Student Image" :src="`https://elearning.msu.ac.zw/assets/pictures/R182924.JPG`">
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th><b>Regnum</b></th>
                            <td>{{ student.regnum }}</td>
                        </tr>
                        <tr>
                            <th><b>Firstnames</b></th>
                            <td>{{ student.firstnames }}</td>
                        </tr>
                        <tr>
                            <th><b>Surname</b></th>
                            <td>{{ student.surname }}</td>
                        </tr>
                        <tr>
                            <th><b>Programme</b></th>
                            <td>{{ student.programme }}</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn w-100 btn-secondary text-dark mt-3" type="button">
                    PROCEED TO PRINT
                </button>
            </div>
        </div>
    </div>
</template>
<script>
import { HomeIcon, PlusIcon } from '@heroicons/vue/24/solid';
import Layout from '../../Shared/Layout.vue';
    export default {
    layout: Layout,
    components: {
        PlusIcon, HomeIcon
    },
    props: {
        student: Object
    },
    data() {
        return {
            imageError: false,
        };
    },
    methods: {
        handleImageError() {
            this.imageError = true;
        },
    },
}

</script>

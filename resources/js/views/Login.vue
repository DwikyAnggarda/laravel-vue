<template>
    <div class="container d-flex flex-column">
        <div
            class="row align-items-center justify-content-center g-0 min-vh-100"
        >
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="../index.html"
                                ><img
                                    src="../assets/images/brand/logo/logo-primary.svg"
                                    class="mb-2"
                                    alt=""
                            /></a>
                            <p class="mb-6">
                                Please enter your user information.
                            </p>
                        </div>
                        <!-- Form -->
                        <form @submit.prevent="login">
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Username or email</label
                                >
                                <input
                                    type="email"
                                    id="email"
                                    class="form-control"
                                    name="email"
                                    v-model="form.email"
                                    placeholder="Email address here"
                                    required=""
                                />
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    v-model="form.password"
                                    placeholder="**************"
                                    required=""
                                />
                            </div>
                            <!-- Checkbox -->
                            <div
                                class="d-lg-flex justify-content-between align-items-center mb-4"
                            >
                                <div class="form-check custom-checkbox">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="rememberme"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="rememberme"
                                        >Remember me</label
                                    >
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Sign in
                                    </button>
                                </div>

                                <div
                                    class="d-md-flex justify-content-between mt-4"
                                >
                                    <div class="mb-2 mb-md-0">
                                        <a href="sign-up.html" class="fs-5"
                                            >Create An Account
                                        </a>
                                    </div>
                                    <div>
                                        <a
                                            href="forget-password.html"
                                            class="text-inherit fs-5"
                                            >Forgot your password?</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import router from "../router";

export default {
    data() {
        return {
            loading: {
                isActive: false,
            },
            form: {
                email: "demohexa@gmail.com",
                password: "12345678",
            },
            carts: [],
        };
    },
    methods: {
        login: function () {
            try {
                //router.push({name: "frontend.home"});
                //router.push({name: "admin.dashboard"});
                //this.loading.isActive = true;
                this.$store
                    .dispatch("login", this.form)
                    .then((res) => {
                        this.loading.isActive = false;
                        //alertService.success(res.data.message);
                        if (this.carts.length > 0) {
                            router.push({ name: "frontend.checkout" });
                        } else {
                            router.push({ name: "admin.dashboard" });
                        }
                    })
                    .catch((err) => {
                        this.loading.isActive = false;
                        console.log("error", err.response);
                        this.errors = err.response.data.errors;
                    });
            } catch (err) {
                this.loading.isActive = false;
            }
        },
    },
};
</script>

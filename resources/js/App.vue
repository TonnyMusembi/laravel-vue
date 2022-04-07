<!-- component -->
<template>
    <div class="font-bold bg-green-500 p-4 mx-16 text-center rounded shadow">
        Account
    </div>
    <div class="container w-80 mx-auto my-20 px-6 py-6 shadow">
        <h1 class="text-green-600 font-bold font-sans text-4xl text-center">
            Login
        </h1>
        <div class="h-0.5 bg-gray-200 w-36 mx-auto mt-2.5"></div>
        <form action="" method="post">
            <div class="flex flex-col my-5">
                <label class="my-2" for="uname">Username</label>
                <input
                    type="text"
                    id="uname"
                    name="uname"
                    class="mt-1 mb-3 shadow-md border-none focus:ring-transparent rounded-sm bg-gray-100 text-pink-500"
                />
                <label class="my-2" for="psw">Password</label>
                <input
                    type="password"
                    id="psw"
                    name="psw"
                    class="mt-1 mb-3 shadow-md border-none focus:ring-transparent rounded-sm bg-gray-100 text-pink-500"
                />
            </div>
            <div class="text-center mt-3">
                <button
                    type="reset"
                    class="px-7 py-2 mx-2 font-semibold text-gray-800 bg-gray-100 rounded"
                >
                    Reset
                </button>
                <button
                    type="submit"
                    class="px-7 py-2 mx-2 font-semibold text-white bg-green-600 rounded"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
<div class="flex justify-center bg-green-500 mx-16 rounded">Download</div>
<br>
    <!-- </div> -->
</template>
<script>
import axios from "axios";
export default {
    data() {
        return {};
    },
    methods: {
        greet() {
            axios
                .get("http://laravel-vue.test/api/orders")
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
const url = "http://laravel-vue.test/api/deliveries";
fetch(url)
    .then((response) => {
        console.log(response);
    })
    .catch((error) => {
        console.log(error);
    });

const array = [1, 2, 3, 3];
console.log(array);




</script>

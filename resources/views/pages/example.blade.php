@extends('layouts.app')

@section('title', 'The example page')

@section('content')
    <form
        x-data="signupForm"
        class="lg:max-w-3xl bg-gray-100 mx-auto p-5 rounded-xl"
        @submit.prevent="submitForm($event)"
    >
        <h1 class="text-2xl mb-5">Ninja Signup Form</h1>

        <!-- username -->
        <div class="form-field">
            <p :class="{'text-red-600': username.length > 10}">
                <span x-text="15 - username.length"> characters remaining</span>
            </p>
            <label>
                <span class="block">Username:</span>
                <input
                    x-model="username"
                    type="text"
                    class="rounded w-2/3 mb-5 border-2 border-gray-300"
                    maxlength="15">
            </label>
            <template x-if="errors.username">
                <p class="error text-red-400" x-text="errors.username"></p>
            </template>
        </div>

        <!-- password -->
        <div class="form-field password">
            <label>
                <span class="block">Password:</span>
                <input
                    :type="showPass ? 'text' : 'password'"
                    x-model="password"
                    class="rounded w-2/3 mb-5 border-2 border-gray-300"
                >
            </label>

            <button type="button" @click="showPass = !showPass">
                <span x-text="showPass ? 'Hide' : 'Show'"></span>
            </button>

            <template x-if="errors.password">
                <p class="error text-red-400" x-text="errors.password"></p>
            </template>
        </div>

        <!-- confirm password -->
        <div class="form-field">
            <label>
                <span class="block">Confirm Password:</span>
                <input
                    type="password"
                    x-model="passwordConfirm"
                    class="rounded w-2/3 mb-5 border-2 border-gray-300"
                >
            </label>
            <template x-if="errors.passwordConfirm">
                <p class="error text-red-400" x-text="errors.passwordConfirm"></p>
            </template>
        </div>

        <!-- belt color -->
        <div class="form-field">
            <label><span class="block">Belt Color:</span>
                <select x-model="belt" class="rounded w-2/3 mb-5 border-2 border-gray-300">
                    <option value="">Select a belt</option>
                    <template x-for="choice in beltChoices" :key="choice">
                        <option :value="choice" x-text="choice"></option>
                    </template>
                </select>
            </label>
            <template x-if="errors.passwordConfirm">
                <p class="error text-red-400" x-text="errors.passwordConfirm"></p>
            </template>
        </div>

        <!-- short bio -->
        <div class="form-field">
            <p :class="{'text-red-600': bio.length > 90}">
                <span x-text="15 - username.length"> characters remaining</span>
            </p>

            <label>
                <p class="hint">
                    <span x-text="100 - bio.length"> characters remaining</span>
                </p>
                <span class="block">Short Bio:</span>
                <textarea
                    class="rounded w-2/3 mb-5 border-2 border-gray-300"
                    maxlength="100"
                    x-model="bio"
                ></textarea>
            </label>
            <template x-if="errors.bio">
                <p class="error text-red-400" x-text="errors.bio"></p>
            </template>
        </div>

        <!-- newsletter signup -->
        <div class="form-field newsletter">
            <label>
                <input type="checkbox" x-model="newsletter">
                <span>Sign up for the newsletter</span>
            </label>
            <div x-text="newsletter"></div>
        </div>

        <!-- submit button -->
        <button
            type="submit" class="bg-gray-300 px-10 py-5 mt-10 rounded cursor-pointer"
            x-transition.scale.90
        >Submit
        </button>

        <div
            class="overlay"
            x-show="success"
            x-transition.opacity.duration.500ms
        >
            <div class="modal"
                 x-transition:enter-start="off-screen"
                 x-transition:enter-end="on-screen"
            >
                <h2>Thank you.</h2>
                <button type="button" @click="success = false">Close</button>
            </div>
        </div>
    </form>
@endsection

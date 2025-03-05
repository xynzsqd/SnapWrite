<x-app-layout>

    <!--Profile header-->
    <x-profile.header :user="$user" />

    <!--Profile nav-->
    <x-profile.nav :user="$user" />

    <!--Profile content-->
    <x-profile.posts :user="$user" />

</x-app-layout>

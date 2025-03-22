<x-clean-layout :title="$title ?? ''" :cssClass="$cssClass ?? ''">
    <x-header />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</x-clean-layout>

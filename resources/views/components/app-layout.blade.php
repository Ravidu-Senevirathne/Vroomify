<x-clean-layout :title="$title ?? 'Vroomify'" :cssClass="$cssClass ?? ''">
    <x-header />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</x-clean-layout>

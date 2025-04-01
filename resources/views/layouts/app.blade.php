@extends('tx::layout-base')

@section('tx-header')
    <x-tx::header>
        <x-slot:left>
            <div class="h-[47px]
                        px-3 pl-6 py-1
                        flex-none flex flex-row justify-center items-center gap-2">
                Logo
            </div>
        </x-slot:left>

        <x-slot:right>
            <x-tx::nav>
                <x-tx::nav-item>
                    <i class="fa-solid fa-cog fa-fw"></i>Item 1
                </x-tx::nav-item>
                <x-tx::nav-item>
                    <i class="fa-solid fa-user fa-fw"></i>Profile
                    <x-slot:dropdown>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>J&J</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-otter fa-fw"></i>Jessica</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-dumbbell fa-fw"></i>Jasper</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-baby fa-fw"></i>Viktor</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cat fa-fw"></i>Mimi de Miemskie!</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                    </x-slot:dropdown>
                </x-tx::nav-item>
                <x-tx::nav-item>
                    <i class="fa-solid fa-user fa-fw"></i>Profile
                    <x-slot:dropdown>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                    </x-slot:dropdown>
                </x-tx::nav-item>
                <x-tx::nav-item>
                    <i class="fa-solid fa-user fa-fw"></i>Profile adawds
                    <x-slot:dropdown>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                    </x-slot:dropdown>
                </x-tx::nav-item>
                <x-tx::nav-item>
                    <i class="fa-solid fa-user fa-fw"></i>Profile
                    <x-slot:dropdown>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                        <x-tx::sub-nav-column>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-language fa-fw"></i>Language</x-tx::sub-nav-item>
                            <x-tx::sub-nav-item><i class="fa-solid fa-power-off fa-fw"></i>Logout</x-tx::sub-nav-item>
                            <x-tx::sub-nav-header>Profile</x-tx::sub-nav-header>
                            <x-tx::sub-nav-item><i class="fa-solid fa-cog fa-fw"></i>Edit Settings</x-tx::sub-nav-item>
                        </x-tx::sub-nav-column>
                    </x-slot:dropdown>
                </x-tx::nav-item>
            </x-tx::nav>
        </x-slot:right>
    </x-tx::header>
@endsection

@extends('tx::layout-base')

@section('tx-header')
    <x-tx::header>
        <x-slot:left>
            Logo
        </x-slot:left>

        <x-slot:right>
            <x-tx::nav>
                <x-tx::nav-item>
                    <i class="fa-solid fa-cog"></i>Item 1
                </x-tx::nav-item>
                <x-tx::nav-item>
                    <i class="fa-solid fa-user"></i>Profile
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
                    <i class="fa-solid fa-user"></i>Profile
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
                    <i class="fa-solid fa-user"></i>Profile
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
                    <i class="fa-solid fa-user"></i>Profile
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

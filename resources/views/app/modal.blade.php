<x-tx::modal id="modal">
    <x-slot:title>
        Modal Title
    </x-slot:title>
    <x-tx::button tx-modal="{{ route('modal') }}">Modal</x-tx::button>
{{--  TODO: Figure out how to do submit without header on normal submit, and only have header on input change  --}}
{{--  TODO: Also figure out why errors are not showing correctly  --}}
    <form
{{--          hx-trigger="change from:input"--}}
          hx-post="{{ route('modal.post') }}"
{{--          hx-headers='{"Precognition": "true"}'--}}
          tx-targets="modal-form"
          id="modal-form">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <input type="date" id="date1" name="date1" value="{{ old('date1') }}"/>
        <input type="date" id="date2" name="date2" value="{{ old('date2') }}"/>
        <input type="text" id="text" name="text" value="{{ old('text') }}"/>
        <x-tx::button-primary type="submit"><i class="fa fa-check"></i>Submit</x-tx::button-primary>
    </form>

    <x-tx::button tx-targets="button3">{{ \Carbon\Carbon::now() }}</x-tx::button>
    <x-tx::button id="button3">{{ \Carbon\Carbon::now() }}</x-tx::button>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <p>This is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdadThis is the modal content. Add your content here. awdadawdad</p>
    <x-slot:footer>
        <div class="flex justify-end space-x-2">
            <x-tx::button-primary @click="alert('test')"><i class="fa fa-check"></i>Confirm</x-tx::button-primary>
            <x-tx::button @click="close()"><i class="fa fa-xmark"></i>Cancel</x-tx::button>
        </div>
    </x-slot:footer>
</x-tx::modal>

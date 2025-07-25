<div>
    <form wire:submit="update">
        <div class="mb-3">
            <label for="">Image du service</label>
            <input type="file" name="photo" wire:model="photo" class="form-control" id="">
            @error('photo')
                <span class="small text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Nom du service</label>
            <input type="text" name="nom" wire:model="nom" class="form-control" id="">
            @error('nom')
                <span class="small text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

          <div class=" mb-3">
                    <label for="">Categorie </label>
                    <select wire:model='category_id' class="form-control @error('category_id') is-invalid @enderror">
                        <option value=""></option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>


        <div class="mb-3">
            <label for="">Meta description du service</label>
            <textarea  class="form-control" name="description" wire:model="meta_description" rows="2" cols="50">
            </textarea>
            {{-- <input type="text" name="description" wire:model="description" class="form-control" id=""> --}}
            @error('meta_description')
                <span class="small text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="">La description du service</label>
            <textarea  class="form-control" name="description" wire:model="description" rows="4" cols="50">
            </textarea>
            {{-- <input type="text" name="description" wire:model="description" class="form-control" id=""> --}}
            @error('description')
                <span class="small text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        @include('components.alert')


        <div class="modal-footer">
            <button class="btn btn-sm btn-primary" type="submit">
                <span wire:loading>
                    <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
                </span>
                Metre a jour
            </button>
        </div>
    </form>
</div>

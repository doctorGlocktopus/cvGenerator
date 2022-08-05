<div>
    <div class="container mt-5 pt-5">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card" style="height: 70vh;">
                    <div class="card-header">
                        <h5 class="card-title">Image Upload</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 pl-4 pr-4 text-center">
                                @if (session()->has('message'))
                                    <div class="alert alert-success text-center">{{ session('message') }}</div>
                                @endif
                                <form wire:submit.prevent="uploadImage">
                                    <div class="form-group">
                                        <label for="image" class="font-weight-bold">Wähle dein Bild aus</label>
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <input type="file" class="form-control" wire:model="image" style="padding: 3px 5px;" />
                                            </div>
                                        </div>
    
                                        @error('image')
                                            <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                        @enderror


                                        <div wire:loading wire:target="image" wire:key="image"><i class="fa fa-spinner fa-spin mt-2 ml-2"></i> wir arbeiten</div>


                                        {{-- ImagePreview --}}

{{-- 
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="100" alt="" class="mt-2">
                                        @endif --}}
                                        @if ($image)
                                        <div class="imgUp">
                                            <div style="height: 239px; width: 432px;" class="mask">
                                                <img src="{{ $image->temporaryUrl() }}"  alt="" class="mt-2">
                                            </div>
                                        </div>
                                        
                                        @endif
                                    </div>

                                    <a href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Using_images">https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Using_images</a>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary w-50 mt-2"><div wire:loading wire:target="uploadImage" wire:key="uploadImage"><i class="fa fa-spinner fa-spin"></i></div> Hochladen</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div class="card" style="height: 58vh;">
                                    <div class="card-header">Alle Bilder</div>
                                    <div class="card-body">
                                        @if (!$images == [])
                                            <div class="row">
                                                @foreach ($images as $image)
                        
                                                    <div class="col-md-2 mb-4">
                                                        <img src="{{ asset('uploads/image_uploads') }}/{{ $image->image }}" class="img-fluid" alt="">
                                                    </div>
                                                    
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    Keine Bilder gefunden
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
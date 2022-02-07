@extends('backend.layouts.app2')

@section('styles')
    <style>
        .section-title-description {
            max-block-size: 118px;
            block-size: 118px;
        }
        .size-sugerence {
            padding-block: 1em;
            display: inline-block;
            font-weight: bold;
        }
    </style>
@endsection

@section('title')
    Agregar historia
@endsection

@section('content')
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <div class="page-title">
                <h4 class="mb-0 font-size-18">Historias</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                  <li class="breadcrumb-item active">Historias</li>
                </ol>
              </div>
              <a href="{{ route('page-about') }}" class="btn btn-danger">Regresar <i class="fas fa-undo-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="page-content-wrapper">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <div class="card-title card-title-with-button mb-4">
                  <h5 class="text-primary"> <i class="fas fa-search"></i> Filtros de busqueda </h5>
                  <button class="btn btn-primary" onclick="createHistory()"><i class="fas fa-plus"></i> Nuevo</button>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-responsive">
                      <table class="table table-sm table-hover">
                        <thead>
                          <tr>
                            <th class="column-options">Opciones</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Link</th>
                            <th class="text-center">Imagen</th>
                          </tr>
                        </thead>
                        <tbody class="vertical-align-middle">
                          @foreach ($histories as $history)
                            <tr>
                              <td class="column-options">
                                <button class="btn btn-sm btn-primary" title="Editar" onclick="editHistory({{$history}})">
                                  <i class="far fa-edit"></i>
                                </button>
                                @if ($history->is_active == 1)
                                  <button class="btn btn-sm btn-success" title="Desactivar" onclick="updateState({{$history}})">
                                    <i class="far fa-check-circle"></i>
                                  </button>
                                @else
                                  <button class="btn btn-sm btn-danger" title="Activar" onclick="updateState({{$history}})">
                                    <i class="far fa-times-circle"></i>
                                  </button>
                                @endif
                              </td>
                              <td> {{ $history->title }} </td>
                              <td>
                                <div class="column-text-description">
                                  {{ $history->description }}
                                </div>
                              </td>
                              <td>
                                <a href="{{ $history->link }}" target="_blank">{{ $history->link }}</a>
                              </td>
                              <td>
                                <img src="{{ asset('storage/about_history/'.$history->image) }}"
                                onclick="openModalImage('{{$history->image}}')"
                                style="block-size: 50px;border-radius: 10px; cursor: pointer"
                                alt="Imagen de {{ $history->title }}">
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 text-center">
              <script>document.write(new Date().getFullYear())</script>
              © Full Tecnoplogia
              <span class="d-none d-sm-inline-block">
                - Crafted with <i class="mdi mdi-heart text-primary"></i>
                by Themesbrand.
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>


  <div class="modal fade" id="modal-image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background: unset; border: none;">
        <div class="modal-body">
          <button type="button" class="btn-close-custom" aria-label="Cerrar" onclick="closeModalImage()">
            <i class="fas fa-times"></i>
          </button>
          <img style="border-radius: 15px;" id="preview-image" alt="Imagen de referencia" class="w-100">
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modal-history" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <span id="title-modal"></span> historia</h5>
          <button type="button" class="btn-close" aria-label="Cerrar"  onclick="closeModal()"></button>
        </div>
        <form action="javascript:;" id="form" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <input type="hidden" id="idhistory" name="idhistory">
                <div class="col-sm-12 mb-2">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control placehoder" placeholder="Escribe aquí..." id="title">
                </div>
                <div class="col-sm-12 mb-2">
                    <label for="description">Descripción</label>
                    <textarea name="description" class="form-control textarea placehoder" placeholder="Escribe aquí..." id="description" rows="3"></textarea>
                </div>
                <div class="col-sm-12 mb-2">
                    <label for="link">Link</label>
                    <input type="url" name="link" class="form-control placehoder" placeholder="Escribe aquí..." id="link">
                </div>
                <div class="col-sm-12 mb-2">
                    <label for="file_input">Imagen <sup>1159px x 633px</sup> </label>
                    <div class="file_container">
                        <input type="file" class="file_input" name="section_title_image" id="file_input" accept="image/*">
                        {{-- @if (isset($data->image))
                          <img id="file_image" src="{{ asset('storage/about_history/'.$data->image ?? '') }}" class="file_image">
                        @else --}}
                          <img id="file_image" src="" class="file_image">
                        {{-- @endif --}}
                        <small class="file_letter">Subir Imagen</small>
                    </div>
                </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick="closeModal()"> Cerrar </button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    <script>
        const END_POINT = "{{ asset('') }}"
        const getValueElement = nameId => document.getElementById(nameId).value
        const setValueElement = (nameId, newValue) => document.getElementById(nameId).value = newValue
        const dataToBeSent = form => new FormData(form)

        const $imageFullSize = document.getElementById("preview-image")
        const $titleModal = document.getElementById("title-modal")
        const $formHistory = document.getElementById('form')

        function closeModalImage() {
          $("#modal-image").modal('hide')
        }

        function openModalImage(nameImage) {
          $("#modal-image").modal('show')
          $imageFullSize.src = `${END_POINT}storage/about_history/${nameImage}`
        }

        function createHistory() {
          openModal()
          $formHistory.reset()
          setTitleModal("Nueva")
          setValueElement('idhistory',0)
          fileImage.src = ``
        }
        const fileInput = document.querySelector('#file_input');
        const fileImage = document.querySelector('#file_image');

        fileInput.addEventListener('change', function (e) {
          const file = e.target.files[0]
          const reader = new FileReader(file)
          reader.onload = (e) => fileImage.src = reader.result
          reader.readAsDataURL(file)
        })

        function closeModal() {
          $('#modal-history').modal('hide')
        }

        function openModal() {
          $("#modal-history").modal('show')
        }

        function editHistory(history) {
          openModal()
          setTitleModal('Editar')
          setValueElement('idhistory', history.id)
          setValueElement('title', history.title)
          setValueElement('description', history.description)
          setValueElement('link', history.link)
          fileImage.src = `${END_POINT}storage/about_history/${history.image}`
          // console.log()
        }

        function setTitleModal(title) {
          $titleModal.textContent = title
        }

        $formHistory.addEventListener('submit', saveForm)

        async function updateState(history) {
            try {
                const data = await axios.post('history-update-state',{
                    id: history.id,
                    is_active: history.is_active
                })
                await Swal.fire({
                    icon: 'success',
                    title: 'Bien',
                    text: 'Proceso exitoso'
                })
                window.location.reload()
            } catch (error) {

            }
        }

        async function saveForm(e) {
          e.preventDefault()
          const params = dataToBeSent(e.target)
          const url_redirect = Boolean(Number(params.get('idhistory'))) ? 'update-about-history' : 'store-about-history'

          try {
            const data = await axios.post(url_redirect ,params)
            await Swal.fire({
              icon: 'success',
              title: 'Bien',
              text: 'Proceso exitoso'
            })
            window.location.reload()
          } catch (error) {
            Swal.fire({
              icon: 'danger',
              title: 'Bien',
              text: 'Error encontrado'
            })
          }
        }


    </script>
@endsection

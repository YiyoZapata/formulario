@yield('content')
@vite("resources/css/app.css")
<!--<body class="bg-gray-100 flex bg-local" style="background: url('./assets/svg/architect.svg')">

    <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24">
  
      <form method="POST">
        @csrf
  
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
  
          <div class="-mx-3 md:flex mb-6">
  
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
  
              
  
              <div>
  
               
  
              </div>
  
            </div>
  
            <div class="md:w-1/2 px-3">
  
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title" >
  
                Titulo*
  
              </label>
  
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Titulo de tu mensaje" name="titulo" value="{{ old('titulo') }}">
              {{ $errors->first('titulo') }}
  
            </div>

            <div class="md:w-1/2 px-3">
  
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="email" >
  
                Email*
  
              </label>
  
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="pepito@ejemplo.com" name="user_mail" value="{{ old('user_mail') }}">
              {{ $errors->first('user_mail') }}
  
            </div>

            <div class="md:w-1/2 px-3">
  
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title" >
  
                Mensaje*
  
              </label>
  
              <textarea class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Tu mensaje" name="user_message" value="{{ old('titulo') }}"></textarea>
              {{ $errors->first('user_message') }}
  
            </div>
  
  
  
          </div>
  
         
  
  
          <div class="-mx-3 md:flex mt-2">
  
            <div class="md:w-full px-3">
  
              <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
  
                Button
  
              </button>
  
            </div>
  
          </div>
  
        </div>
  
      </form>
  
    </div>
  
  </body>-->
<div class="container">
  <form action="" method="POST">
    @csrf
    <label class="block">
      <span class="text-gray-700">Titulo</span>
      <input type="text" class="border-2 form-input mt-1 block w-full" placeholder="Titulo de tu mensaje" name="titulo" value="{{ old('titulo') }}">
    </label>
    {{ $errors->first('titulo') }}

    <label class="block">
      <span class="text-gray-700">Correo</span>
      <input type="email" class="border-2 form-input mt-1 block w-full" placeholder="tucorreo@ejemplo.com" name="user_mail" value="{{ old('user_mail') }}">
    </label>
    {{ $errors->first('user_mail') }}

    <label class="block">
      <span class="text-gray-700">Tu mensaje</span>
      <textarea class="border-2 form-textarea mt-1 block w-full" rows="3" placeholder="Tu mensaje" name="user_message" value="{{ old('titulo') }}"></textarea>
    </label>
    {{ $errors->first('user_message') }}

    <label class="block">
      <span class="text-gray-700">Acceso</span>
      <select class="border-2 form-select block w-full mt-1" name="Acceso">
        <option value="true">Privado</option>
        <option value="false">público</option>
      </select>
    </label>

    <div class="block">
      <span class="text-gray-700">Checkboxes</span>
      <div class="mt-2">
        <div>
          <label class="inline-flex items-center ml-2">Comentable </label>
            <input type="checkbox" class="border-2  form-checkbox text-indigo-600" name="comentable" checked>
            
         
        </div>
        <div>
          <label class="inline-flex items-center ml-2">Caducable</label>
            <input type="checkbox" class="border-2 mt-1 form-checkbox text-green-500" name="caducable" checked>
            
          
        </div>

        <div class="-mx-3 md:flex mt-2">
  
          <div class="md:w-full px-3">

            <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">

              Enviar

            </button>

          </div>

        </div>
        
      </div>
    </div>
  </form>
</div>


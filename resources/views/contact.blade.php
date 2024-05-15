@component('mail::message')
# Hola,

Has recibido un nuevo mensaje de contacto.

**Nombre:** {{ $data['nombre'] }}

**Email:** {{ $data['email'] }}

**Teléfono:** {{ $data['telefono'] }}

**Mensaje:**

{{ $data['mensaje'] }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
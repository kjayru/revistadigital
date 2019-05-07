@component('mail::message')

    		Bienvenido al sistema Revista Digital Claro<br>
            Tus clave de acceso es:<br>
            {{ $clave }}
           
            [Ingresa al sistema](http://revistamkt.claro.com.pe/login)

@endcomponent

@props(['type'=> 'info'])

@php
#props es una variable ejemplo type
#attributes}} ejemplo mb-4
#esta archivo dse los llama COMPONENTE ANONIMOS
    switch ($type){
        case 'info':
            #code
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;

        case 'danger':
            $class = 'text-red-800 bg-blue-50 dark:bg-gray-800 dark:text-red-400';
            break;
        
        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;

        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;
            
        case 'dark':
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400';
            break;
    
        default:
        $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
    } 

    //definido clases por defecto merge(['class' => 'p-4  text-sm  rounded-lg ' . $class]) 
    //y tiene las clases que van a depender de los alertas switch variable $type 
    //componentes ANOONIMOS: no dependen de ninguna clase
@endphp

    <div {{ $attributes->merge(['class' => 'p-4  text-sm  rounded-lg ' . $class]) }} role="alert">
        <span class="font-medium">{{ $title ?? 'Info Alert' }}</span>{{ $slot }} 
    </div>




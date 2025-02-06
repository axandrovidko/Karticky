<!DOCTYPE html>
<html style="height:100%" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body style="height:100%" class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div style="display:flex; flex-direction: column; justify-content:space-between;height:100%;">
        <div id="jokers" style="display:flex; flex-direction:row; justify-content:space-between;height:30%;">

        </div>

        <div id="hand" style="display:flex; flex-direction:row; justify-content:space-between;height:30%;">
            
        </div>
    </div>    
    
        
        


<script defer>
    function GG() {
        let f = [
            "Ah","Kh","Qh","Jh","10h","9h","8h","7h","6h","5h","4h","3h","2h",
            "Ad","Kd","Qd","Jd","10d","9d","8d","7d","6d","5d","4d","3d","2d",
            "As","Ks","Qs","Js","10s","9s","8s","7s","6s","5s","4s","3s","2s",
            "Ac","Kc","Qc","Jc","10c","9c","8c","7c","6c","5c","4c","3c","2c",
        ]
        return f.map(card=>{
            card = [card,[]];
            rank = card[0][0]=="1"?"10":card[0][0];
            number = rank!="A"&&rank!="K"&&rank!="Q"&&rank!="J"
            face = rank=="K"||rank=="Q"||rank=="J"
            even = number && Number(rank)%2 == 0
            odd = rank == "A" || ( number && Number(rank)%2 == 1 )
            color = card[0][card[0].length-1];

            card[1].push(rank)
            card[1].push(color)
            if (number) card[1].push("number")
            if (face) card[1].push("face")
            if (even) card[1].push("even")
            if (odd) card[1].push("odd")

            return card;
        })
    }
    const FullDeck = [
        [
            "Ah",
            [
                "A",
                "h",
                "odd"
            ]
        ],
        [
            "Kh",
            [
                "K",
                "h",
                "face"
            ]
        ],
        [
            "Qh",
            [
                "Q",
                "h",
                "face"
            ]
        ],
        [
            "Jh",
            [
                "J",
                "h",
                "face"
            ]
        ],
        [
            "10h",
            [
                "10",
                "h",
                "number",
                "even"
            ]
        ],
        [
            "9h",
            [
                "9",
                "h",
                "number",
                "odd"
            ]
        ],
        [
            "8h",
            [
                "8",
                "h",
                "number",
                "even"
            ]
        ],
        [
            "7h",
            [
                "7",
                "h",
                "number",
                "odd"
            ]
        ],
        [
            "6h",
            [
                "6",
                "h",
                "number",
                "even"
            ]
        ],
        [
            "5h",
            [
                "5",
                "h",
                "number",
                "odd"
            ]
        ],
        [
            "4h",
            [
                "4",
                "h",
                "number",
                "even"
            ]
        ],
        [
            "3h",
            [
                "3",
                "h",
                "number",
                "odd"
            ]
        ],
        [
            "2h",
            [
                "2",
                "h",
                "number",
                "even"
            ]
        ],
        [
            "Ad",
            [
                "A",
                "d",
                "odd"
            ]
        ],
        [
            "Kd",
            [
                "K",
                "d",
                "face"
            ]
        ],
        [
            "Qd",
            [
                "Q",
                "d",
                "face"
            ]
        ],
        [
            "Jd",
            [
                "J",
                "d",
                "face"
            ]
        ],
        [
            "10d",
            [
                "10",
                "d",
                "number",
                "even"
            ]
        ],
        [
            "9d",
            [
                "9",
                "d",
                "number",
                "odd"
            ]
        ],
        [
            "8d",
            [
                "8",
                "d",
                "number",
                "even"
            ]
        ],
        [
            "7d",
            [
                "7",
                "d",
                "number",
                "odd"
            ]
        ],
        [
            "6d",
            [
                "6",
                "d",
                "number",
                "even"
            ]
        ],
        [
            "5d",
            [
                "5",
                "d",
                "number",
                "odd"
            ]
        ],
        [
            "4d",
            [
                "4",
                "d",
                "number",
                "even"
            ]
        ],
        [
            "3d",
            [
                "3",
                "d",
                "number",
                "odd"
            ]
        ],
        [
            "2d",
            [
                "2",
                "d",
                "number",
                "even"
            ]
        ],
        [
            "As",
            [
                "A",
                "s",
                "odd"
            ]
        ],
        [
            "Ks",
            [
                "K",
                "s",
                "face"
            ]
        ],
        [
            "Qs",
            [
                "Q",
                "s",
                "face"
            ]
        ],
        [
            "Js",
            [
                "J",
                "s",
                "face"
            ]
        ],
        [
            "10s",
            [
                "10",
                "s",
                "number",
                "even"
            ]
        ],
        [
            "9s",
            [
                "9",
                "s",
                "number",
                "odd"
            ]
        ],
        [
            "8s",
            [
                "8",
                "s",
                "number",
                "even"
            ]
        ],
        [
            "7s",
            [
                "7",
                "s",
                "number",
                "odd"
            ]
        ],
        [
            "6s",
            [
                "6",
                "s",
                "number",
                "even"
            ]
        ],
        [
            "5s",
            [
                "5",
                "s",
                "number",
                "odd"
            ]
        ],
        [
            "4s",
            [
                "4",
                "s",
                "number",
                "even"
            ]
        ],
        [
            "3s",
            [
                "3",
                "s",
                "number",
                "odd"
            ]
        ],
        [
            "2s",
            [
                "2",
                "s",
                "number",
                "even"
            ]
        ],
        [
            "Ac",
            [
                "A",
                "c",
                "odd"
            ]
        ],
        [
            "Kc",
            [
                "K",
                "c",
                "face"
            ]
        ],
        [
            "Qc",
            [
                "Q",
                "c",
                "face"
            ]
        ],
        [
            "Jc",
            [
                "J",
                "c",
                "face"
            ]
        ],
        [
            "10c",
            [
                "10",
                "c",
                "number",
                "even"
            ]
        ],
        [
            "9c",
            [
                "9",
                "c",
                "number",
                "odd"
            ]
        ],
        [
            "8c",
            [
                "8",
                "c",
                "number",
                "even"
            ]
        ],
        [
            "7c",
            [
                "7",
                "c",
                "number",
                "odd"
            ]
        ],
        [
            "6c",
            [
                "6",
                "c",
                "number",
                "even"
            ]
        ],
        [
            "5c",
            [
                "5",
                "c",
                "number",
                "odd"
            ]
        ],
        [
            "4c",
            [
                "4",
                "c",
                "number",
                "even"
            ]
        ],
        [
            "3c",
            [
                "3",
                "c",
                "number",
                "odd"
            ]
        ],
        [
            "2c",
            [
                "2",
                "c",
                "number",
                "even"
            ]
        ]
    ]
    const Jokers = [
        ["J1",0,"Jonkler.png","inf1",[[0,()=>true,()=>{setMainPoint(0,getvariable(0,0))}]],[0]],
        ["J2",1,"Jonkler.png","inf2",[]],
        ["J3",2,"Jonkler.png","inf3",[]],
        ["J4",3,"Jonkler.png","inf4",[]],
        ["J5",4,"Jonkler.png","inf5",[]],
        ["J6",5,"Jonkler.png","inf6",[]],
        ["J7",6,"Jonkler.png","inf7",[]]
    ]
    const combos = [
        //name,N,M,function check
        ["FLUSH SIX",666,66,(cards)=>{
            if(cards.length < 6 || cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  combo[2] == undefined
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == 1
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["FLUSH BLOCKHOUSE",450,45,(cards)=>{
            if(cards.length < 6 || cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  combo[2] == 1
            &&      combo[3] == undefined
            &&      combo[4] == 1
            &&      combo[5] == undefined
            &&      combo[6] == undefined
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["Full Blockhouse",350,40,(cards)=>{
            if(cards.length < 6) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == 1
            &&      combo[3] == undefined
            &&      combo[4] == 1
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["FLUSH TWO TRIPLES",350,30,(cards)=>{
            if(cards.length < 6 || cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  combo[2] == undefined
            &&      combo[3] == 2
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["FLUSH THREE PAIRS",340,28,(cards)=>{
            if(cards.length < 6 || cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  combo[2] == 3
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["Six of a Kind",266,26,(cards)=>{
            if(cards.length < 6) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == undefined
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == 1
        }],
        ["Two Triples",250,24,(cards)=>{
            if(cards.length < 6) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == undefined
            &&      combo[3] == 2
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["Three Pairs",200,22,(cards)=>{
            if(cards.length < 6) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == 3
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["FLUSH FIVE",240,20,(cards)=>{
            if(cards.length < 5 || cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  combo[2] == undefined
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == 1
            &&      combo[6] == undefined
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["FLUSH HOUSE",180,14,(cards)=>{
            if(cards.length < 5 || cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  combo[2] == 1
            &&      combo[3] == 1
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["Five of a Kind",150,12,(cards)=>{
            if(cards.length < 5) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == undefined
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == 1
            &&      combo[6] == undefined
        }],
        ["Straight Flush",100,8,(cards)=>{
            if(cards.length < 5) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            straight = longestOrderedSequence(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            return  straight >= minCardsForStraight
            &&      (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["Four of a Kind",50,7,(cards)=>{
            if(cards.length < 4) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == undefined
            &&      combo[3] == undefined
            &&      combo[4] == 1
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["Full House",35,6,(cards)=>{
            if(cards.length < 5) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == 1
            &&      combo[3] == 1
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["Flush",35,5,(cards)=>{
            if(cards.length < minCardsForFlush) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            suit = countCardSets(tags,["h","d","s","c"])
            return (suit[minCardsForFlush] == 1||suit[minCardsForFlush+1] == 1||suit[minCardsForFlush+2] == 1)
        }],
        ["Straight",30,4,(cards)=>{
            if(cards.length < minCardsForStraight) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            straight = longestOrderedSequence(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return straight >= minCardsForStraight
        }],
        ["Three of a Kind",30,3,(cards)=>{
            if(cards.length < 3) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == undefined
            &&      combo[3] == 1
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["Two Pairs",25,2,(cards)=>{
            if(cards.length < 4) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            return  combo[2] == 2
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["Pair",10,2,(cards)=>{
            C(cards)
            if(cards.length < 2) return false;
            let tags = []; cards.forEach(card =>{ tags.push(card[1]) })
            combo = countCardSets(tags,["2","3","4","5","6","7","8","9","10","J","Q","K","A"])
            suit = countCardSets(tags,["h","d","s","c"])
            C(tags)
            return  combo[2] == 1
            &&      combo[3] == undefined
            &&      combo[4] == undefined
            &&      combo[5] == undefined
            &&      combo[6] == undefined
        }],
        ["High Card",5,1,(cards)=>{
            if(cards.length < 1) return false;
        }],
        
        ["None",0,0,(cards)=>true]
    ]
    // ----------------------------------------------------------------
    let playerData = {
        "username" : "user1",
        "id" : 0,
        "data" : {
            "jokers" : [0,1,3,4],
            "money" : 3000,
            "decksUnlocked" : [0],
        },
        "ingame" : true,
        "gameid" : 32,
        "oponentid" : 1,
        "gamedata" : {

        },
    };
    // ukazka kodu pre hraca v pripade ze hrac neni v hre tak in game je false a ostatne budu nastavene na -1
    

    

    
    
    
    
    
    // tu su vsetky premenne pouzite pocas hry
    let gameJokers = [
        ["J1",0,"Jonkler.png","inf1",[[0,()=>true,()=>{setMainPoint(0,getvariable(0,0))}]],[2]],
        ["J7",6,"Jonkler.png","inf7",[[1,()=>getNumOfTags("K")>0||getNumOfTags("Q")>0,()=>{C(getvariable(6,0));setVariable(6,0,getvariable(6,0)+1);setMainPoint(0,getvariable(6,0))}]],[1]]
    ];
    let mainPoints = [0,0];
    // h-srcdce,d-diamond,s-spades,c-clubs
    let isYourTurn = true;
    let handSize = 8;
    let maxPlayHandSize = 5;
    let minCardsForStraight = 5;
    let minCardsForFlush = 5;
    let nowPlayingcard = [];//card that is getting scored
    let cardsInHand = [];
    let cardsSelectedInHand = [];
    let cardElementsSelectedInHand = [];
    let DeckCards = CopyArray(FullDeck);

    YourTurn()
    

    async function Play(){
        let waitTime = 1000;
        if(!isYourTurn) return;
        //funkcionalita ked stlacis tlacidlo play
        let curHand = HandPlaying(cardsSelectedInHand);
        mainPoints = [0,0]
        C("Hand played: " + curHand[0])
        mainPoints[0] += curHand[1];
        C("N =" + curHand[1])
        mainPoints[1] += curHand[2];
        C("M =" + curHand[2])
        await delay(waitTime)
        Event(0,cardsSelectedInHand.map(card=>card[1]))

        for (const card of cardsSelectedInHand){
            nowPlayingcard =CopyArray(card);
            mainPoints[0] += (card[0][0]=="A"?11:(card[0][0]=="K"||card[0][0]=="Q"||card[0][0]=="J"||card[0][0]=="1"?10:Number(card[0][0])))
            C("N +" + (card[0][0]=="A"?11:(card[0][0]=="K"||card[0][0]=="Q"||card[0][0]=="J"||card[0][0]=="1"?10:Number(card[0][0]))))
            await delay(waitTime)
            await Event(1,card[1]);
        }

        DoFewTimes(cardsSelectedInHand.length,()=>{RemoveCard(0)});
    }
    function RemoveCard(i){//vymaze kartu z kurky na indexe zo selecnutych
        ForEachElement(cardsInHand,(card,index)=>{
            if(card[0]==cardsSelectedInHand[i][0]){
                cardElementsSelectedInHand = RemoveAtIndex(cardElementsSelectedInHand,i);
                cardsSelectedInHand = RemoveAtIndex(cardsSelectedInHand,i);
                cardsInHand = RemoveAtIndex(cardsInHand,i);
                return;
            }
        })
    }
    function HandPlaying(cards){//returns ["Pair",20,2] //name,Ns,Ms
        //cards = cards.map(card => card[1]);
        let answer = ForEachElement(combos,(combo)=>{//comba si pytaju cele karty
            if(combo[3](cards)) return[combo[0],combo[1],combo[2]];
        })
        return answer
    }
    function YourTurn(){
        while(cardsInHand.length < handSize){
            TakeCard();
        }
        SortCardsInHand();
        // now u wait for player response
    }
    function TakeCard(){
        let i = RandomInRange(0,DeckCards.length-1);
        novaCard = DeckCards[i];
        DeckCards = RemoveAtIndex(DeckCards,i);

        //zobratie karty a vlozenie tagov karty
        //Event(1,novaCard[1]);
        AddCardToHand(novaCard);//EDIT

        cardsInHand.push(novaCard);
    }
    function AddCardToHand(card,selected){
        //GetStringSplitIntoArray(card[0],"")
        console.log(card)
        console.log(card[0])
        console.log(card[1])
        let loc = "Suit="+(card[0][card[0].length-1]=="h"?"Hearts":(card[0][card[0].length-1]=="s"?"Spades":(card[0][card[0].length-1]=="d"?"Diamonds":(card[0][card[0].length-1]=="c"?"Clubs":"Other")))) +", Number="+(card[0][0]=="A"?"Ace":(card[0][0]=="K"?"King":(card[0][0]=="Q"?"Queen":(card[0][0]=="J"?"Jack":(card[0][0]=="1"?"10":(card[0][0]=="H"?(RandomInRange(0,1)==0?"Back Blue":"Back Red"):card[0][0]))))))+".png"

        let hand = document.getElementById('hand');
        let karta = document.createElement('card');
        let obrazok = document.createElement('img');
        obrazok.src = `{{ asset('images/${loc}') }}`;
        obrazok.style.height = "100%";

        karta.style.height = "100%";
        karta.style.width = "max-content";
        if(selected == true) karta.style.marginTop = "-20px";

        karta.appendChild(obrazok);

        karta.addEventListener("click",(event) => CardAtemptToSelect(card,karta,event));
        hand.appendChild(karta);
        console.log(loc);
    }
    function CardAtemptToSelect(card,element,event){
        if(cardsSelectedInHand.some(elem=>elem[0]==card[0])){
            for (let index = 0; index < cardElementsSelectedInHand.length; index++) {
                let elm = cardsSelectedInHand[index];
                if(elm[0] === card[0]){
                    if(event){
                        event.target.style.marginTop = "0px";
                    }
                    cardElementsSelectedInHand = RemoveAtIndex(cardElementsSelectedInHand,index);
                    cardsSelectedInHand = RemoveAtIndex(cardsSelectedInHand,index);
                    break;
                }
            }
            C(cardsSelectedInHand)
        }else if(maxPlayHandSize > cardsSelectedInHand.length){
            if(event){
                event.target.style.marginTop = "-20px";
            }
            //here i want to add css styles

            cardElementsSelectedInHand.push(element);
            cardsSelectedInHand.push(card);
            C(cardsSelectedInHand)
        }
    }
    function Start(){
        DeckCards = CopyArray(FullDeck);
        cardsSelectedInHand = [];
        cardsInHand = [];
        handSize = 8;
        YourTurn();
    }
    function Event(when,tags){
        if(typeof tags != object) tags = [tags];
        if(when == 0){//at start of game
            //nothing
        }
        else if(when == 1){//card played
            getNumOfTags = function (_tag) {
                yes = true;
                _tag.forEach(tag => {
                    if(!tags.includes(tag)){
                        yes = false;
                    }
                });
                return yes?1:0;
            }
        }
        else if(when == 2){//card played
            getNumOfTags = function (_tag) {
                yes = true;
                _tag.forEach(tag => {
                    if(!tags.includes(tag)){
                        yes = false;
                    }
                });
                return yes?1:0;
            }
        }
        else if(when == 3){
            getNumOfTags = function (_tag) {
                yes = true;
                _tag.forEach(tag => {
                    if(!tags.includes(tag)){
                        yes = false;
                    }
                });
                return yes?1:0;
            }
        }
        else if(when == 4){
            getNumOfTags = function (_tag) {
                all = 0;
                yes = true;
                _tag.forEach(card => {
                    card.forEach(tag => {
                        if(!tags.includes(tag)){
                            yes = false;
                        }
                    })
                    if(yes) all++;
                });
                return all;
            }
        }
        else if(when == 5){
            getNumOfTags = function (_tag) {
                all = 0;
                _tag.forEach(card => {//tagy na test
                    yes = true;
                    card.forEach(tag => {//kazdy tag karty
                        if(!tags.includes(tag)){
                            yes = false;
                        }
                    })
                    if(yes) all++;
                });
                return all;
            }
        }
        //get Tags ready
        
        //spusti vsetky pravidla jokerov(kontrola podmienky)
        for (let n = 0; n < gameJokers.length; n++) {
            joker = gameJokers[n];
            for (let l = 0; l < joker[4].length; l++) {
                rule = joker[4][l];
                if(rule[0] == when && rule[1]() == true){
                    rule[2]();
                }
            }
        }

        

    }
    function effect(when, why, action){
        /* -- when --
        0 - start
        1 - card taken
        2 - card played
        3 - card discarded
        4 - hand played
        5 - use
        */
        /* -- why --
        
        */
    }
    function getNumOfTags(tag){//empty, is set in event

    }
    function SortCardsInHand(how){
        if(how == "none" || how == "custom") return;
        _g =CopyArray(cardsInHand);
        //_g =_g.map(card=>[card])//EDIT
        _g = _g.map(card=>{
            return [(card[0][0]=="A"?14:(card[0][0]=="K"?13:(card[0][0]=="Q"?12:(card[0][0]=="J"?11:(card[0][0]=="1"?10:Number(card[0][0])))))), (card[0][card[0].length-1]=="h"?4:(card[0][card[0].length-1]=="d"?3:(card[0][card[0].length-1]=="s"?2:(card[0][card[0].length-1]=="c"?1:0))))];
        })
        if(how == "suit"){

        }
        else{
            _g = _g.sort()
        }
    }
    function getvariable(idJonkler,idVariable){
        let answer = null;
        gameJokers.forEach(joker => {
            if(joker[1] == idJonkler){
                answer = joker[5][idVariable];
                return answer;
            }
        });
        return answer;
    }
    //actions:
    function setVariable(idJonkler,idVariable,value){
        for (let i = 0; i < gameJokers.length; i++) {
            let element = gameJokers[i];
            if(gameJokers[i][1] == idJonkler){
                gameJokers[i][5][idVariable] = value;
            }
        }
    }
    function setMainPoint(type,value){
        /* type
        0 - +n
        1 - +m
        2 - xm
        */
        if (type == 0){
            C("N +" + value);
            mainPoints[0] += value;
        }
        else if(type == 1){
            C("M +" + value);
            mainPoints[1] += value;
        }
        else if(type == 2){
            C("M x" + value);
            mainPoints[1] *= value;
        }
    }
    function countCardSets(cards, validTags) {
        let countMap = new Map();

        for (let card of cards) {
            for (let tag of card) {
                if (validTags.includes(tag)) {
                    countMap.set(tag, (countMap.get(tag) || 0) + 1);
                }
            }
        }

        let result = new Map();
        for (let count of countMap.values()) {
            result.set(count, (result.get(count) || 0) + 1);
        }

        return Object.fromEntries(result);
    }
    function longestOrderedSequence(tags, sequence) {
        if(sequence == undefined)sequence = ["A","K","Q","J","10","9","8","7","6","5","4","3","2"];

        let longest = 0;
        let nowest = 0;

        sequence.forEach((Stag)=>{
            now = true;
            ForEachElement(tags,(card) =>{
                if(card.includes(Stag)){
                    nowest++;
                    if(nowest>longest) longest=nowest;
                    now = false;
                    return 0;
                }
            })
            if(now) nowest = 0;
        })
        return longest;
    }
    function delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

//------------template
function FindPaternsAndOutliers(things,test,num){
    
}
function DoFewTimes(top,func){
    let answer = undefined;
    for (let index = 0; index < top; index++) {
        answer = func(index);
        if (answer != undefined) break;
    }
    return answer;
}
function DoFewTimes(top,bottom,func){
    let answer = undefined;
    for (let index = bottom; index < top; index++) {
        answer = func(index);
        if (answer != undefined) break;
    }
    return answer;
}
function ForEachElement(array,func){
    let answer = undefined;
    for (let index = 0; index < array.length; index++) {
        let element = array[index];
        if(func.length >= 2){
            answer = func(element,index);
        }else if(func.length <= 1){
            answer = func(element);
        }
        if (answer !=undefined) break;
    }
    return answer;
}
function ConvertToAnotherBase(number,oldBase,newBase){
    let array = MakeArray(number);
    let inbase10 = 0;
    if(oldBase != 10){
        let space = array.length-1;
        array.forEach(item=>{
            inbase10 += Math.pow(oldBase,space) * item;
            space--;
        })
    }else{
        inbase10 = number;
    }
    let answer = 0;
    if(newBase != 10){
        let place = 0;
        let rem = 0;
        while(true){
            rem = inbase10 % newBase;
            answer += rem * Math.pow(10,place);
            inbase10 -= rem;
            inbase10 /= newBase;
            place++;
            if(inbase10 == 0) break;
        }
    }else{
        answer = inbase10;
    }
    return answer;
}
function C(any){
    console.log(any)
}
function IsSameObject(obj1, obj2) {
    if (Object.keys(obj1).length !== Object.keys(obj2).length) return false
  
    for (const key in obj1) {
      const value1 = obj1[key]
      const value2 = obj2[key]
      if (typeof value1 === "object" && value2 !== null) {
        if (!IsSameObject(value1, value2)) return false
      } else if (value1 !== value2) {
        return false
      }
    }
    return true
}
function CopyObject(object){
    let newObject = {}
    for(let key in object){
        value = object[key]
        newObject[key] = value
    }
    return newObject
}
function Faktorial(number) {
    if(number == 0) return 1
    return number * Faktorial(number-1)
}
function installFile(content,filename,fileType) {
    const blob = new Blob([content], { type: 'text/plain' })
    const a = document.createElement('a')
    a.href = URL.createObjectURL(blob)
    a.download = `${filename}.${fileType}`
    document.body.appendChild(a)
    a.click()
    document.body.removeChild(a)
}
function GetArraysCommonElement(array1,array2,tests){//tests is optional
    answer = undefined;
    if (tests != undefined && typeof tests != "object") tests = [tests];
    array1.forEach(thing=>{
        if(array2.includes(thing)){
            if(tests == undefined){
                answer = thing;
            }
            else{
                if(tests.includes(thing)){
                    answer = thing;
                }
            }
        }
    })
    return answer;
}
function UlozDoZoznamuVsetkyKombinacie(array) {
  if(array.length == 1){return CopyArray([array])};
  let zoznam = []
  let cislaKombinacii = []
  let dlzka = array.length
  let zaklad = []
  let _dlzka = dlzka
  while(_dlzka > 0){
    zaklad.push(_dlzka-1)
    _dlzka--
  }
  zaklad.sort((a,b)=> a-b)
  //zaklad je nachystany
  let poradie = 0;
  while(poradie < dlzka){
    let _zaklad = CopyArray(zaklad);
    _zaklad = RemoveAtIndex(_zaklad,poradie);
    let kombinacie = UlozDoZoznamuVsetkyKombinacie(_zaklad);
    kombinacie.forEach(kombo =>{
      cislaKombinacii.push([poradie].concat(kombo))
    })
    poradie++
  }
  cislaKombinacii.forEach(kombo=>{
    newkombo = []
    kombo.forEach(num=>{
      newkombo.push(array[num])
    })
    zoznam.push(newkombo)
  })
  //console.log(zoznam)
  return zoznam;
}
function RemoveAtIndex(array,index){
  f = array.slice(0,index)
  l = array.slice(index+1,array.length)
  return f.concat(l)
}
function ShufleArray(array) {
  let array1 = CopyArray(array)
  let array2 = []
  while(array1.length>0) {
    let a = RandomInRange(0,array1.length-1)
    array2.push(array1[a])
    array1.splice(a,1)
  }
  return(array2)
}
function BubbleSort(arr) {
  var len = arr.length
  for (var i = 0; i < len; i++) {
    for (var j = 0; j < len - 1; j++) {
      if (arr[j].id > arr[j + 1].id) {
        var temp = arr[j]
        arr[j] = arr[j + 1]
        arr[j + 1] = temp
      }
    }
  }
  return (arr)
}
function ConvertTo2DArray(zoznam, columns, rows) {
  let zoznam2D = []
  for (let i = 0; i < rows; i++) {
    let row = []
    for (let j = 0; j < columns; j++) {
      let index = i * columns + j
      row.push(zoznam[index])
      if(zoznam[index] == undefined) {
        row.pop()
        row.push(0)
        if(j == (columns-1) && i == (rows-1)) {
          row.pop()
          row.push(1)
        }
      }
    }
    zoznam2D.push(row)
  }
  return(zoznam2D)
}
function RandomInRange(x, y) {
  let k = Math.floor((Math.abs(x - y) + 1) * Math.random() + Math.min(x, y))
  return (k)
}
function RandomInRangeWithCustomCenter(x, y, center) {
  let k = RandomInRange(0,1)
  if(k == 0) {
    return (RandomInRange(x,center))
  } else {
    return (RandomInRange(center,y))
  }
}
function NumberOfMaxDivisions(x, n) {
  let g = 0
  while(true) {
    if(x % n == 0) {
      g++
      x = x / n
    } else {
      return (g)
    }
  }
}
function WriteMoves(moves) {
  let movesDiv = document.getElementById('moves')
  movesDiv.textContent = "moves: " + moves
}
function GetMoves() {
  let movesDiv = document.getElementById('moves')
  let movesChar = movesDiv.textContent.split('')
  movesChar = movesChar.slice(7,movesChar.length)
  movesChar = movesChar.join('')
  return (Number(movesChar))
}
function WriteTarget(target) {
  let targetDiv = document.getElementById('target')
  targetDiv.textContent = "target: " + target
}
function GetTarget() {
  let targetDiv = document.getElementById('target')
  targetChar = targetDiv.textContent.split('')
  targetChar = targetChar.slice(7,targetChar.length)
  targetChar = targetChar.join('')
  return (Number(targetChar))
}
function WriteDisplay(display) {
  let displayDiv = document.getElementById('display')
  displayDiv.textContent = display
}
function GetDisplay() {
  let displayDiv = document.getElementById('display')
  displayChar = displayDiv.textContent
  return (Number(displayChar))
}
function WriteLevel(display) {
  let displayDiv = document.getElementById('level')
  displayDiv.textContent = display
}
function GetLevel() {
  let displayDiv = document.getElementById('level')
  displayChar = displayDiv.textContent
  return (Number(displayChar))
}
function IfElse(statement,True,False) {
  if(statement==true) {
    return(True)
  } else {
    return(False)
  }
}
function Minx(value,min) {
  if(value<min) {
    return(min) 
  } else {
    return(value)
  }  
}
function Maxx(value,max) {
  if(value>max) {
    return(max) 
  } else {
    return(value)
  }
}
function CopyArray(array) {
  return (array.slice())
}
function setCookie(name, value) {
  //console.log(`COOKIE ${name}:${value}`)
  localStorage.setItem(name, value)
}
function getCookie(cname) {
  return( localStorage.getItem(cname) )
}
function GetArrayFromIndexes(x1,x2,array) {
  return (array.slice(x1,x2+1))
}
function GetStringSplitIntoArray(string,separator) {
  if(separator == undefined) return string.split("");
  return (string.split(String(separator)))
}
</script>
</body>
</html>

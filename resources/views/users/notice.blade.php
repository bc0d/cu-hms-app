<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Notification Page" />
    
    

    <title>Notification Page</title>
    <!-- Favicons -->
  <link href="{{ asset('users/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('users/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('users/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('users/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/css/table.css') }}" rel="stylesheet">
  
    <!-- Linking Stylesheet -->
    <style>
        *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,::after,::before{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0}.absolute{position:absolute}.relative{position:relative}.-top-\[0\.65rem\]{top:-.65rem}.right-0{right:0}.mx-auto{margin-left:auto;margin-right:auto}.-mr-\[0\.35rem\]{margin-right:-.35rem}.flex{display:flex}.hidden{display:none}.h-7{height:1.75rem}.h-fit{height:-moz-fit-content;height:fit-content}.min-h-screen{min-height:100vh}.w-8{width:2rem}.w-fit{width:-moz-fit-content;width:fit-content}.w-full{width:100%}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-2{gap:.5rem}.gap-3{gap:.75rem}.overflow-hidden{overflow:hidden}.rounded-lg{border-radius:.5rem}.rounded-xl{border-radius:.75rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.bg-\[var\(--blue\)\]{background-color:var(--blue)}.bg-\[var\(--red\)\]{background-color:var(--red)}.bg-\[var\(--veryLightGrayishBlue\)\]{background-color:var(--veryLightGrayishBlue)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.p-4{padding:1rem}.px-1{padding-left:.25rem;padding-right:.25rem}.px-4{padding-left:.5rem;padding-right:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-\[0\.15rem\]{padding-top:.15rem;padding-bottom:.15rem}.pb-3{padding-bottom:.75rem}.pb-6{padding-bottom:1.5rem}.pt-1{padding-top:.25rem}.font-\[\'Plus_Jakarta_Sans\'\2c sans-serif\]{font-family:'Plus Jakarta Sans',sans-serif}.text-\[0\.6rem\]{font-size:.6rem}.text-sm{font-size:.875rem;line-height:1.25rem}.font-bold{font-weight:700}.font-normal{font-weight:400}.leading-\[1\.15rem\]{line-height:1.15rem}.tracking-wide{letter-spacing:.025em}.text-\[var\(--blue\)\]{color:var(--blue)}.text-\[var\(--darkGrayishBlue\)\]{color:var(--darkGrayishBlue)}.text-\[var\(--grayishBlue\)\]{color:var(--grayishBlue)}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.shadow-\[0px_0px_5rem_6px_var\(--shadowMainCard\)\]{--tw-shadow:0px 0px 5rem 6px var(--shadowMainCard);--tw-shadow-colored:0px 0px 5rem 6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.drop-shadow-\[0px_0px_1px_\#00000050\]{--tw-drop-shadow:drop-shadow(0px 0px 1px #00000050);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}:root{--red:hsl(1, 54%, 51%);--blue:hsl(219, 85%, 26%);--veryLightGrayishBlue:hsl(210, 60%, 98%);--lightGrayishBlue1:hsl(211, 68%, 94%);--lightGrayishBlue2:hsl(205, 33%, 90%);--grayishBlue:#6a717e;--darkGrayishBlue:#67707e;--veryDarkBlue:hsl(224, 21%, 14%);--shadowActive:hsla(0, 0%, 0%, 0.102);--shadowMainCard:hsl(0deg 0% 0% / 6%);--tclamp2:clamp(1.25rem, 1.071rem + 0.476vw, 1.5rem);--tclamp3:clamp(0.875rem, 0.786rem + 0.238vw, 1rem);--tclamp4:clamp(0.75rem, 0.643rem + 0.286vw, 0.9rem);--pxclamp1:clamp(1.3rem, 0.8rem + 1.333vw, 2rem);--pyclamp1:clamp(2rem, 1.786rem + 0.571vw, 2.3rem)}.tclamp2{font-size:var(--tclamp2)}.tclamp3{font-size:var(--tclamp3)}.tclamp4{font-size:var(--tclamp4)}.unread-shadow{--tw-shadow:0px 1px 6px 3px var(--shadowActive);--tw-shadow-colored:0px 1px 6px 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.unread-border{border-width:0;border-top-width:2px;border-color:var(--red)}.read-shadow{--tw-shadow:0px 0px 3px 0px var(--shadowActive);--tw-shadow-colored:0px 0px 3px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.status-on{border-radius:9999px;border-width:2px;--tw-border-opacity:1;border-color:rgb(34 197 94 / var(--tw-border-opacity))}@font-face{font-family:"Plus Jakarta Sans";font-weight:500;src:local("Plus Jakarta Sans"),url(/assets/fonts/static/PlusJakartaSans-Medium.ttf) format("truetype");font-display:swap}@font-face{font-family:"Plus Jakarta Sans";font-weight:800;src:local("Plus Jakarta Sans"),url(/assets/fonts/static/PlusJakartaSans-ExtraBold.ttf) format("truetype");font-display:swap}@keyframes animate-right{0%{transform:translateX(-3%);opacity:0}100%{transform:translateX(0);opacity:1}}.animate-right{animation-name:animate-right;animation-duration:1s}.hover\:text-\[var\(--blue\)\]:hover{color:var(--blue)}.hover\:opacity-90:hover{opacity:.9}@media (min-width:768px){.md\:max-w-\[730px\]{max-width:730px}.md\:gap-4{gap:1rem}.md\:px-7{padding-left:1.75rem;padding-right:1.75rem}}
    </style>

  

  <body
    class="mx-auto flex min-h-screen items-start justify-center bg-white font-['Plus_Jakarta_Sans',sans-serif] md:max-w-[100%]"
  >
    <main
      class="overflow-hidden rounded-xl mt-5 bg-white px-4 py-6  md:px-7"
    >
      
      <div class="notify-tray flex items-center justify-between pb-6 font-bold">
        <div class="notify-count flex gap-2">
          <h2 class="tclamp2">Notifications</h2>
          
            
        </div>
        
      </div>
      <div class="notifications-tray flex flex-col gap-3" >
        

        <div class="notification relative rounded-lg">
          <div
            class="read-shadow flex w-full gap-2 rounded-lg bg-[var(--veryLightGrayishBlue)] p-3">
           <!-- <img
              class="status-on h-fit"
              src="{{ asset('users/assets/img/team/team-3.jpg') }}"
              width="45"
              height="45"
              alt="Avatar Johnny Depp"
            />-->
            <div class="tclamp3 relative leading-[1.rem] tracking-wide">
              <ul>
                <li>
                  <a href="#" class=" border  p-2">Hello, thanks for setting up the Chess Club. I've been a member
                for a few weeks now and I'm already having lots of fun and
                improving my game. <br ><P class=" pb-1 pt-1 mr-3 text-[var(--grayishBlue)]">5 days ago</P></a>
                </li>
              </ul>
              
              
            </div>
          </div>
        </div>
        
        
        
      </div>
    </main>
  </body>
</html>
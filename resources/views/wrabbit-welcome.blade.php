<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="color-scheme" content="light dark"> --}}
    <title>Wrabbit Movie Casting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">  
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <header class="navbar">
                <div class="logo">
                    <svg width="73" height="68" viewBox="0 0 73 68" fill="none">
                        <path d="M15.9251 35.6628V39.6254H26.4919V30.3794H15.9251V35.6628ZM13.2834 33.0211V30.3794H10.6417V27.7377H13.2834V25.096H10.6417V33.0211H13.2834ZM13.2834 35.6628H10.6417V36.9837C10.6417 37.6843 10.92 38.3562 11.4154 38.8517C11.9108 39.3471 12.5828 39.6254 13.2834 39.6254V35.6628ZM31.7753 33.0211V25.096H29.1336V27.7377H31.7753V30.3794H29.1336V33.0211H31.7753ZM31.7753 35.6628H29.1336V39.6254C29.8342 39.6254 30.5061 39.3471 31.0016 38.8517C31.497 38.3562 31.7753 37.6843 31.7753 36.9837V35.6628ZM26.4919 25.096V18.4918H15.9251V27.7377H26.4919V25.096ZM31.7753 22.4543V21.1335C31.7753 20.4329 31.497 19.7609 31.0016 19.2655C30.5061 18.7701 29.8342 18.4918 29.1336 18.4918V22.4543H31.7753ZM13.2834 22.4543V18.4918C12.5828 18.4918 11.9108 18.7701 11.4154 19.2655C10.92 19.7609 10.6417 20.4329 10.6417 21.1335V22.4543H13.2834ZM13.2834 15.8501H29.1336C30.5348 15.8501 31.8787 16.4067 32.8695 17.3976C33.8603 18.3884 34.417 19.7323 34.417 21.1335V36.9837C34.417 38.3849 33.8603 39.7288 32.8695 40.7196C31.8787 41.7104 30.5348 42.2671 29.1336 42.2671H13.2834C11.8822 42.2671 10.5383 41.7104 9.54747 40.7196C8.55664 39.7288 8 38.3849 8 36.9837V21.1335C8 19.7323 8.55664 18.3884 9.54747 17.3976C10.5383 16.4067 11.8822 15.8501 13.2834 15.8501Z" fill="black"/>
                        <path d="M45.9904 15.7077L48.5681 14.3174L47.7384 12.7789H45.9904V15.7077ZM50.5619 24.1833L47.9841 25.5737L50.5619 30.3529L53.1396 25.5737L50.5619 24.1833ZM55.1334 15.7077V12.7789H53.3854L52.5556 14.3174L55.1334 15.7077ZM60.8561 15.7077L63.3831 17.1883L65.9664 12.7789H60.8561V15.7077ZM53.7986 27.7538L51.2716 26.2732L50.4002 27.7606L51.2776 29.2444L53.7986 27.7538ZM61.0396 40V42.9288H66.1738L63.5607 38.5093L61.0396 40ZM55.2668 40L52.6945 41.4004L53.5266 42.9288H55.2668V40ZM50.5619 31.3576L53.1342 29.9572L50.5619 25.2322L47.9896 29.9572L50.5619 31.3576ZM45.8569 40V42.9288H47.5972L48.4292 41.4004L45.8569 40ZM40.0508 40L37.5312 38.5068L34.9106 42.9288H40.0508V40ZM47.3085 27.7538L49.828 29.247L50.7089 27.7606L49.834 26.2706L47.3085 27.7538ZM40.2343 15.7077V12.7789H35.1179L37.7088 17.1909L40.2343 15.7077ZM43.4127 17.0981L47.9841 25.5737L53.1396 22.793L48.5681 14.3174L43.4127 17.0981ZM53.1396 25.5737L57.7111 17.0981L52.5556 14.3174L47.9841 22.793L53.1396 25.5737ZM55.1334 18.6365H60.8561V12.7789H55.1334V18.6365ZM58.329 14.2272L51.2716 26.2732L56.3257 29.2343L63.3831 17.1883L58.329 14.2272ZM51.2776 29.2444L58.5185 41.4907L63.5607 38.5093L56.3197 26.2631L51.2776 29.2444ZM61.0396 37.0712H55.2668V42.9288H61.0396V37.0712ZM57.8392 38.5996L53.1342 29.9572L47.9896 32.7579L52.6945 41.4004L57.8392 38.5996ZM47.9896 29.9572L43.2846 38.5996L48.4292 41.4004L53.1342 32.7579L47.9896 29.9572ZM45.8569 37.0712H40.0508V42.9288H45.8569V37.0712ZM42.5704 41.4932L49.828 29.247L44.7889 26.2606L37.5312 38.5068L42.5704 41.4932ZM49.834 26.2706L42.7598 14.2246L37.7088 17.1909L44.7829 29.2369L49.834 26.2706ZM40.2343 18.6365H45.9904V12.7789H40.2343V18.6365Z" fill="black"/>
                        <path d="M4.35449 56.5566H1.75195L1.73926 55.8965H3.97998C4.43701 55.8965 4.82633 55.8309 5.14795 55.6997C5.46956 55.5685 5.71289 55.3739 5.87793 55.1157C6.0472 54.8534 6.13184 54.5317 6.13184 54.1509C6.13184 53.7616 6.04932 53.4399 5.88428 53.186C5.71924 52.9279 5.47168 52.7375 5.1416 52.6147C4.81152 52.492 4.39681 52.4307 3.89746 52.4307H1.95508V61H1.17432V51.7578H3.89746C4.36719 51.7578 4.78825 51.8044 5.16064 51.8975C5.53304 51.9906 5.85042 52.1366 6.11279 52.3354C6.37516 52.5343 6.57406 52.7861 6.70947 53.0908C6.84912 53.3913 6.91895 53.751 6.91895 54.1699C6.91895 54.5508 6.83431 54.8957 6.66504 55.2046C6.49577 55.5093 6.25667 55.759 5.94775 55.9536C5.64307 56.144 5.27702 56.2625 4.84961 56.3091L4.35449 56.5566ZM4.29736 61H1.50439L1.9043 60.3335H4.29736C4.75439 60.3335 5.14372 60.2573 5.46533 60.105C5.79118 59.9484 6.04085 59.7262 6.21436 59.4385C6.38786 59.1507 6.47461 58.8079 6.47461 58.4102C6.47461 58.0589 6.39844 57.7437 6.24609 57.4644C6.09375 57.1851 5.861 56.965 5.54785 56.8042C5.2347 56.6392 4.83691 56.5566 4.35449 56.5566H2.73584L2.74854 55.8965H5.04004L5.17969 56.1313C5.5944 56.1737 5.95622 56.3027 6.26514 56.5186C6.57829 56.7301 6.8195 56.9989 6.98877 57.3247C7.16227 57.6506 7.24902 58.0081 7.24902 58.3975C7.24902 58.9561 7.12419 59.43 6.87451 59.8193C6.62907 60.2044 6.28418 60.4985 5.83984 60.7017C5.39974 60.9006 4.88558 61 4.29736 61ZM15.3276 61.127C14.879 61.127 14.4664 61.0444 14.0898 60.8794C13.7174 60.7144 13.3915 60.4816 13.1122 60.1812C12.8372 59.8807 12.6235 59.5252 12.4711 59.1147C12.323 58.7 12.2489 58.2472 12.2489 57.7563V57.4834C12.2489 56.9544 12.3272 56.4762 12.4838 56.0488C12.6404 55.6214 12.8562 55.2554 13.1313 54.9507C13.4063 54.646 13.7195 54.4132 14.0707 54.2524C14.4262 54.0874 14.7986 54.0049 15.1879 54.0049C15.6238 54.0049 16.011 54.0832 16.3495 54.2397C16.6881 54.3921 16.9716 54.61 17.2001 54.8936C17.4329 55.1729 17.6085 55.505 17.727 55.8901C17.8455 56.271 17.9047 56.6921 17.9047 57.1533V57.6167H12.706V56.9692H17.1493V56.8804C17.1409 56.4953 17.0626 56.1356 16.9145 55.8013C16.7706 55.4627 16.5548 55.1877 16.267 54.9761C15.9793 54.7645 15.6196 54.6587 15.1879 54.6587C14.8663 54.6587 14.5701 54.7264 14.2992 54.8618C14.0326 54.9972 13.802 55.1919 13.6073 55.4458C13.4169 55.6955 13.2688 55.9938 13.163 56.3408C13.0614 56.6836 13.0107 57.0645 13.0107 57.4834V57.7563C13.0107 58.1372 13.0657 58.4927 13.1757 58.8228C13.29 59.1486 13.4508 59.4364 13.6581 59.686C13.8697 59.9357 14.1194 60.1304 14.4071 60.27C14.6949 60.4097 15.0123 60.4795 15.3593 60.4795C15.7655 60.4795 16.1252 60.4054 16.4384 60.2573C16.7515 60.105 17.033 59.8659 17.2826 59.54L17.7587 59.9082C17.6106 60.1283 17.4244 60.3314 17.2001 60.5176C16.9801 60.7038 16.7156 60.8519 16.4067 60.9619C16.0977 61.0719 15.738 61.127 15.3276 61.127ZM35.9089 60.3335V61H30.7102V60.3335H35.9089ZM30.9451 51.7578V61H30.1643V51.7578H30.9451ZM35.2615 55.9028V56.5693H30.7102V55.9028H35.2615ZM35.8772 51.7578V52.4307H30.7102V51.7578H35.8772ZM41.3913 54.1318L43.2448 56.9058L45.1047 54.1318H46.006L43.6764 57.4961L46.1012 61H45.2126L43.2512 58.0991L41.2961 61H40.4074L42.8322 57.4961L40.5026 54.1318H41.3913ZM53.7291 54.1318V54.7539H50.2887V54.1318H53.7291ZM51.5519 52.3672H52.3072V59.3306C52.3072 59.6479 52.3495 59.887 52.4342 60.0479C52.5188 60.2087 52.6288 60.3166 52.7643 60.3716C52.8997 60.4266 53.0457 60.4541 53.2022 60.4541C53.3165 60.4541 53.4265 60.4478 53.5323 60.4351C53.6381 60.4181 53.7333 60.4012 53.818 60.3843L53.8497 61.0254C53.7566 61.055 53.636 61.0783 53.4879 61.0952C53.3398 61.1164 53.1917 61.127 53.0436 61.127C52.7516 61.127 52.4934 61.0741 52.2691 60.9683C52.0449 60.8582 51.8692 60.672 51.7423 60.4097C51.6153 60.1431 51.5519 59.7812 51.5519 59.3242V52.3672ZM59.7827 55.2681V61H59.0274V54.1318H59.7637L59.7827 55.2681ZM62.2139 54.0811L62.1948 54.7793C62.1102 54.7666 62.0277 54.756 61.9473 54.7476C61.8669 54.7391 61.7801 54.7349 61.687 54.7349C61.357 54.7349 61.0671 54.7962 60.8174 54.9189C60.572 55.0374 60.3646 55.2046 60.1953 55.4204C60.0261 55.632 59.897 55.8817 59.8081 56.1694C59.7193 56.453 59.6685 56.7576 59.6558 57.0835L59.3765 57.1914C59.3765 56.7428 59.423 56.326 59.5161 55.9409C59.6092 55.5558 59.751 55.2194 59.9414 54.9316C60.1361 54.6396 60.3794 54.4132 60.6714 54.2524C60.9676 54.0874 61.3146 54.0049 61.7124 54.0049C61.8098 54.0049 61.905 54.0133 61.9981 54.0303C62.0954 54.043 62.1673 54.0599 62.2139 54.0811ZM71.0351 59.7686V56.2266C71.0351 55.9007 70.9674 55.6193 70.832 55.3823C70.6966 55.1453 70.4977 54.9634 70.2353 54.8364C69.9729 54.7095 69.6492 54.646 69.2641 54.646C68.9086 54.646 68.5912 54.7095 68.312 54.8364C68.0369 54.9591 67.8189 55.1263 67.6581 55.3379C67.5016 55.5452 67.4233 55.7759 67.4233 56.0298L66.6616 56.0234C66.6616 55.7653 66.725 55.5156 66.852 55.2744C66.9789 55.0332 67.1588 54.8174 67.3915 54.627C67.6243 54.4365 67.9015 54.2863 68.2231 54.1763C68.5489 54.062 68.9065 54.0049 69.2958 54.0049C69.7867 54.0049 70.2184 54.0874 70.5908 54.2524C70.9674 54.4175 71.2615 54.665 71.4731 54.9951C71.6847 55.3252 71.7905 55.7399 71.7905 56.2393V59.5591C71.7905 59.7961 71.8074 60.0415 71.8412 60.2954C71.8793 60.5493 71.9322 60.7588 71.9999 60.9238V61H71.1938C71.143 60.8477 71.1028 60.6572 71.0732 60.4287C71.0478 60.196 71.0351 59.9759 71.0351 59.7686ZM71.2128 57.001L71.2255 57.585H69.7338C69.3445 57.585 68.9954 57.6209 68.6865 57.6929C68.3818 57.7606 68.1236 57.8621 67.912 57.9976C67.7005 58.1287 67.5375 58.2874 67.4233 58.4736C67.3133 58.6598 67.2582 58.8714 67.2582 59.1084C67.2582 59.3538 67.3196 59.5781 67.4423 59.7812C67.5693 59.9844 67.747 60.1473 67.9755 60.27C68.2083 60.3885 68.4833 60.4478 68.8007 60.4478C69.2239 60.4478 69.5963 60.3695 69.9179 60.2129C70.2438 60.0563 70.5125 59.8511 70.7241 59.5972C70.9356 59.3433 71.0774 59.0661 71.1494 58.7656L71.4794 59.2036C71.4244 59.4152 71.3229 59.6331 71.1747 59.8574C71.0309 60.0775 70.8425 60.2848 70.6098 60.4795C70.3771 60.6699 70.102 60.8265 69.7846 60.9492C69.4715 61.0677 69.116 61.127 68.7182 61.127C68.2696 61.127 67.8782 61.0423 67.5439 60.873C67.2138 60.7038 66.9557 60.4731 66.7695 60.1812C66.5875 59.8849 66.4965 59.5506 66.4965 59.1782C66.4965 58.8397 66.5685 58.5371 66.7123 58.2705C66.8562 57.9997 67.0636 57.7712 67.3344 57.585C67.6095 57.3945 67.9396 57.2507 68.3246 57.1533C68.714 57.0518 69.1498 57.001 69.6323 57.001H71.2128Z" fill="black"/>
                    </svg>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">About us</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="left-col">
                    <h1>Exciting world of film and television</h1>
                    <h2>We <a href="#" class="connect">connect</a> film <span class="extras">extras</span> with producers</h2>
                    <div class="about-info">
                        <p>Becoming a Supporting Artist, or "Extra", can provide you with an exciting and rewarding career which you can fit around your lifestyle, family or other work commitments.</p>
                        <p>Centre Stage is the industry portal to allow you access to this exciting career and you will find the information and assistance you need on our website.</p>
                    </div>
                    <form class="cta-btns" action="{{ route('generate-magic-link') }}" method="POST">
                        @csrf
                        <div class="loading-spinner">
                            <img src="{{ asset('images/loading.gif') }}" alt="loading spinner">
                        </div>
                        {{-- display errors or success message BEGIN --}}
                        @if($errors->any())
                            @php
                               $errors = collect($errors->all())->unique(); 
                            @endphp
                            <div class="email-errors">
                                <ul>
                                    @foreach ($errors as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (session('success'))
                            <div class="email-success">
                                <ul>
                                    <li>{{ session('success') }}</li>
                                </ul>
                            </div>
                        @elseif (session('fail'))
                            <div class="email-fail">
                                <ul>
                                    <li>{{ session('fail') }}</li>
                                </ul>
                            </div>
                        @endif
                        {{-- display errors or success message END --}}
                        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="leila@outlook.com" 
                        style="{{ session('success') == 'Email sent -> see INBOX!' ? 'opacity: 0.3;pointer-events:none;': ''}}">

                        <input type="hidden" name="create_user_token" value="impossible">
                        <button id="magic-link-btn" style="{{ session('success') == 'Email sent -> see INBOX!' ? 'opacity: 0.5; pointer-events:none;': ''}}">

                            <svg fill="#000000" width="800px" height="800px" viewBox="0 0 1920 1920">
                                <path d="M0 1694.235h1920V226H0v1468.235ZM112.941 376.664V338.94H1807.06v37.723L960 1111.233l-847.059-734.57ZM1807.06 526.198v950.513l-351.134-438.89-88.32 70.475 378.353 472.998H174.042l378.353-472.998-88.32-70.475-351.134 438.89V526.198L960 1260.768l847.059-734.57Z" fill-rule="evenodd"/>
                            </svg>
                            <span>send magic link to login</span>
                        </button>
                    </form>
                </div>
                <div class="right-col">
                    <div class="img1">
                        <div class="img1-1">
                        </div>
                    </div>
                    <div class="img2">
                        <div class="img2-1">
                        </div>
                    </div>
                </div>
            </main>
            <div class="space" style="margin-top: 5em"></div>
        </div>
    </div>
    <script>
        const magicLinkBtn = document.querySelector('#magic-link-btn');
        const loadingSpinner = document.querySelector('.loading-spinner');

        // loading spinner
        magicLinkBtn.addEventListener("click", function () {
            console.log("heeee")
            loadingSpinner.style.display = "block";
        })
    </script>
</body>
</html>
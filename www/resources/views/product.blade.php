<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
        }

        ul.menuUl {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #374050;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        ul.menuUl>li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        ul.menuUl>li a.active {
            background-color: #04AA6D;
            color: white;
        }

        ul.menuUl>li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
        table>thead>tr>th{
            font-weight: 100;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Optionally, you can also include Bootstrap's JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">


</head>
<body>

<ul class="menuUl">
    <li style="display: flex;">
        <div style="display: inline-block; padding: 10px; background: white;border-bottom-right-radius: 20px;">
            <img src="/img.png" alt="" style="height: 50px">
        </div>
        <div style="padding: 5px 15px; color: white">
            <span>
            Enterprise <br>
            Resource <br>
            Planning
            </span>
        </div>
    </li>
    <li><a href="#" style="text-align: center;color: white;font-weight: 100;padding: 10px">Продукта</a></li>
</ul>
<div id="Products">
<div style="margin-left:200px;padding:1px 0px;height:500px;">
    <div style="height: 50px; background: white;display: flex;justify-content: space-between;padding-left: 10px">
        <a href="" style="border-bottom: 2px red solid;padding: 10px 0px;text-decoration: none;color: red;">
            Продукта
        </a>
        <div class="dropdown">
            <a class="dropdown-toggle" style="display: inline-block;color: #ccc;padding: 15px 20px;display: inline-block;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth('web')->user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/logout">Logout</a>
            </div>
        </div>

    </div>
    <div style="padding: 10px;display: flex;justify-content: space-between; align-items: baseline;">
        <table class="table" style="width: 600px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Артикул</th>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Атрибуты</th>
                    @if(auth('web')->user()->can('delete products'))
                        <th>Delete</th>
                    @endif
                    @if(auth('web')->user()->can('edit products'))
                        <th>Update</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr v-for="(row, index) in products">
                    <td>@{{ row.id }}</td>
                    <td>@{{ row.article }}</td>
                    <td>@{{ row.name }}</td>
                    <td>@{{ row.status }}</td>
                    <td>
                        <span v-for="(attribute, attr_index) in JSON.parse(row.data)">
                            @{{ attribute.name }}: @{{ attribute.value }}<br>
                        </span>

                    </td>
                    @if(auth('web')->user()->can('delete products'))
                        <td> <button @click="deleteItem(row.id)" class="btn btn-outline-dark" >Delete</button> </td>
                    @endif
                    @if(auth('web')->user()->can('edit products'))
                        <td> <button class="btn btn-outline-info" @click="showProduct(row.id)">Update</button> </td>
                    @endif
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    @if(auth('web')->user()->can('edit products'))
                        <td colspan="6" style="text-align: center;">
                    @else
                        <td colspan="4" style="text-align: center;">
                    @endif
                        <div style="display: inline-block;">
                            <ul class="pagination">
                                <li class="page-item" v-for="page in pageCount" :key="page">
                                    <a class="page-link" style="cursor: pointer" @click="changePage(page)">@{{ page }}</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
        @if(auth('web')->user()->can('create products'))
            <button class="btn btn-info" type="button" data-toggle="modal" data-target="#addProductModal">
                Добавить
            </button>
        @endif

    </div>
</div>
<div class="modal fade"  id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: #374050; color: white;">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Добавить продукт</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #cccccc">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="" style="width: 100%">
                    Артикул
                    <input class="form-control" v-model="product.article">
                </label>
                <label for="" style="width: 100%">
                    Название
                    <input class="form-control" v-model="product.name">
                </label>
                <label for="" style="width: 100%">
                    Статус
                    <select name="" id="" class="form-control" v-model="product.status">
                        <option value="available">Доступен</option>
                        <option value="unavailable">Не доступен</option>
                    </select>
                </label>
                <label for="">
                      Атрибуты <br><br>
                    <div v-for="(attribute, index) in product.attributes" :key="index" style="display: flex; justify-content: space-around;">
                        <label style="padding-left: 5px">
                            Название
                            <input type="text" class="form-control" v-model="attribute.name">
                        </label>
                        <label style="padding-left: 5px">
                            Значение
                            <input type="text" class="form-control" v-model="attribute.value">
                        </label>
                        <label  style="color: white;padding:30px 10px;">
                            <a href="#" @click="removeAttribute(index)" style="color: #ccc"><i class="bi bi-trash"></i></a>
                        </label>
                    </div>
                    <a href="#" @click="addAttribute()">+ Добавить атрибут</a>
                </label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" @click="addProduct()">Добавить продукт</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade"  id="EditProductModal" tabindex="-1" role="dialog" aria-labelledby="EditProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background: #374050; color: white;">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditProductModalLabel">Добавить продукт</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #cccccc">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="" style="width: 100%">
                        Артикул
                        @if(auth('web')->user()->can('edit articles'))
                            <input class="form-control" v-model="product.article">
                        @else
                            <input class="form-control" readonly v-model="product.article">
                        @endif
                    </label>
                    <label for="" style="width: 100%">
                        Название
                        <input class="form-control" v-model="product.name">
                    </label>
                    <label for="" style="width: 100%">
                        Статус
                        <select name="" id="" class="form-control" v-model="product.status">
                            <option value="available">Доступен</option>
                            <option value="unavailable">Не доступен</option>
                        </select>
                    </label>
                    <label for="">
                        Атрибуты <br><br>
                        <div v-for="(attribute, index) in product.attributes" :key="index" style="display: flex; justify-content: space-around;">
                            <label style="padding-left: 5px">
                                Название
                                <input type="text" class="form-control" v-model="attribute.name">
                            </label>
                            <label style="padding-left: 5px">
                                Значение
                                <input type="text" class="form-control" v-model="attribute.value">
                            </label>
                            <label  style="color: white;padding:30px 10px;">
                                <a href="#" @click="removeAttribute(index)" style="color: #ccc"><i class="bi bi-trash"></i></a>
                            </label>
                        </div>
                        <a href="#" @click="addAttribute()">+ Добавить атрибут</a>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" @click="editProduct()">Редактировать продукт</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    new Vue({
        el: '#Products',
        data: {
            product: {
                id: '',
                article: '',
                name: '',
                status: 'available',
                attributes: []
            },
            products: [],
            pageCount: 0,
            token: null,
        },
        methods: {
            async getProduct(page = 1) {
                try {
                    const response = await axios.get(`/api/products/`, {
                        params: {
                            page: page, // Specify the page number for pagination
                        },
                        headers: {
                            'Content-Type': 'multipart/form-data',
                            'Authorization': `Bearer ${this.token}`,
                        },
                    });
                    this.products = response.data.data
                    this.pageCount = response.data.last_page;
                } catch (error) {
                    console.error('Error uploading product:', error);
                }
            },

            async addProduct() {
                const formData = new FormData();
                formData.append('name', this.product.name);
                formData.append('article', this.product.article);
                formData.append('status', this.product.status);
                formData.append('data', JSON.stringify(this.product.attributes));

                try {
                    const response = await axios.post('/api/products', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data',
                            'Authorization': `Bearer ${this.token}`,
                        },
                    });
                    if(response.status===201){
                        alert("Create successfully!")
                        location.reload()
                    }
                    this.product.id = '';
                    this.product.name = '';
                    this.product.article = '';
                    this.product.status = 'available';
                    this.product.attributes = [];
                } catch (error) {
                    console.error('Error uploading article:', error);
                }
            },

            addAttribute() {
                this.product.attributes.push({ name: '', value: '' });
            },

            removeAttribute(index) {
                this.product.attributes.splice(index, 1);
            },

            async changePage(page) {
                this.getProduct(page);
            },

            async showProduct(id) {
                let data = await axios.get(`/api/products/`+id, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'Authorization': `Bearer ${this.token}`,
                    },
                }).then(function (response) {
                    return  response.data
                }).catch(function (error) {
                    console.error('Error:', error);
                });
                this.product.id = data.id;
                this.product.name = data.name;
                this.product.article = data.article;
                this.product.status = data.status;
                this.product.attributes = JSON.parse(data.data);
                $('#EditProductModal').modal('show');
            },
            async editProduct() {
                const formData = new FormData();
                formData.append('_method', 'PUT');
                formData.append('name', this.product.name);
                formData.append('article', this.product.article);
                formData.append('status', this.product.status);
                formData.append('data', JSON.stringify(this.product.attributes));

                try {
                    const response = await axios.post('/api/products/'+this.product.id, formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data',
                            'Authorization': `Bearer ${this.token}`,
                        },
                    });
                    if(response.status===200){
                        alert("Update successfully!")
                        location.reload()
                    }
                    this.product.id = '';
                    this.product.name = '';
                    this.product.article = '';
                    this.product.status = 'available';
                    this.product.attributes = [];
                } catch (error) {
                    console.error('Error uploading article:', error);
                }
            },
            async deleteItem(item){
                try {
                    if (!confirm("Are you sure Delete?")) return;
                    await axios.delete(`/api/products/`+item, {
                        headers: {
                            'Authorization': `Bearer ${this.token}`,
                        },
                    }).then(function (response) {
                        if(response.status==204){
                            alert("Delete Successfully!");
                            location.reload()
                        }
                    });
                } catch (error) {
                    console.error('Error deleting article:', error);
                }
            }
        },
        mounted(){
            this.token = @json(auth('web')->user()->api_token);
            if (!this.token) {
                console.error('User is not authenticated');
                return;
            }
            this.getProduct();
        }
    });
</script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .form-inline {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }

    .search-input {
        padding: 5px 40px;

        border: 2px solid #ccc;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .search-input:focus {
        border-color: #007bff;
        outline: none;
    }

    .search-button {
        padding: 6px 20px;
        border: 1px solid #c3c3c3;


        color: #090808;
        font-size: 16px;

        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <header class="p-3  border-bottom">
        <div class="row">
            <div class="col-lg-2">
                <h1>Admin</h1>
            </div>
            <div class="col-lg-1">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
            <div class="col-lg-7">

                <form class="form-inline my-2 my-lg-0">
                    <input class="search-input" type="search" placeholder="Search" aria-label="Search">
                    <button class="search-button" type="submit">Search</button>
                </form>
            </div>
            <div class="col-lg-2">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-bell"></i>
                <a href="#" class=" link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                        class="rounded-circle">
                </a>
            </div>


        </div>


    </header>

    <script src="https://kit.fontawesome.com/ee336c5ec5.js" crossorigin="anonymous"></script>
</body>

</html>

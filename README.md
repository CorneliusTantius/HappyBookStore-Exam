<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Happy Book Store
A mid exam project using laravel framework by Cornelius Tantius (2301859650).

## Running Repo After Cloning
1. Run `composer install` to generate depedencies in vendor folder.
2. Create <ins>.env<ins> file in the root of the project (next to <ins>.env.example<ins>).
3. Run `php artisan key:generate` to generate application key.
4. Configure <ins>.env<ins> (see the details below).
5. Make a database called <ins>happybookstore<ins> or change it from <ins>.env<ins> and make the database.
6. Run `php artisan migrate:fresh --seed` to migrate the database as well as the data.
7. Run the app using using `php artisan serve`

## Components Utilized
Couple core components utilized in this project are:
- [Bootstrap](https://getbootstrap.com/) for UI 
- Database using mysql.
- Model (to provide table data mapping and eloquent relation).
- Controller (to control the eloquent logic).
- Pages -> php blade files for the core / content display. Those pages are:
  - Home page.
  - Home page (for categorized view because it is dynamically set).
  - Details page (to show book details).
  - Contact page.
- Layout for core layouting that will be used at all view.
- Components, for important components that will be reused.
- Route for core web routing.
## Preview
<table>
  <tr>
    <td><img alt="" src="/public/preview/1.png"></td>
    <td><img alt="" src="/public/preview/2.png"></td>
  </tr>
  <tr>
    <td><img alt="" src="/public/preview/3.png"></td>
    <td><img alt="" src="/public/preview/4.png"></td>
  </tr>
  <tr>
    <td><img alt="" src="/public/preview/5.png"></td>
    <td><img alt="" src="/public/preview/6.png"></td>
  </tr>
</table>
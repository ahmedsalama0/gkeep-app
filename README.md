# **Google Keep Clone (Laravel)**

## **Overview**
This is a Google Keep clone built with Laravel, allowing users to create, manage, and style notes efficiently. The app includes authentication, note customization, and archiving features.

## **Features**
- ✅ **User Authentication**: 
  - Secure login and registration system using Laravel Breeze.
- ✅ **Note Management**: 
  - Create, update, and display notes.
- ✅ **Note Appearance**: 
  - Customize notes by adding background images or colors.
- ✅ **Archive Notes**: 
  - Move notes to the archive.
- ✅ **Trash & Deletion**: 
  - Soft delete notes (move to trash) or permanently delete them.
- ✅ **Search Functionality**: 
  - Quickly find notes by their content or title.
- ✅ **Modal Display**: 
  - View notes in a modal for better user experience.

## **Tech Stack**
- **Backend:** PHP, Laravel
- **Frontend:** Laravel Blade Template, HTML, CSS, JavaScript, jQuery
- **Styling:** Bootstrap 5, Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze

## **Installation & Setup**
1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/your-repo.git
   cd your-repo
   ```
2. Install dependencies:
   ```sh
   composer install
   npm install
   ```
3. Configure the `.env` file:
   - Set up your database credentials.

4. Run database migrations:
   ```sh
   php artisan migrate
   ```
5. Compile assets:
   ```sh
   npm run dev
   ```
6. Install Laravel Breeze for authentication:
   ```sh
   composer require laravel/breeze --dev
   php artisan breeze:install
   npm install
   npm run dev
   php artisan migrate
   ```
7. Start the application:
   ```sh
   php artisan serve
   ```

## **Usage**
- **Register/Login**: Access the app using your credentials.
- **Create Notes**: Add new notes with custom backgrounds.
- **Edit Notes**: Update note content and appearance.
- **Archive & Trash**: Move notes to archive or delete them (soft or permanently).
- **Search**: Quickly find notes using the search bar.
- **Modal View**: View notes in a pop-up modal.
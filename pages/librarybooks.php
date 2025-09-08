<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Eva Marie Libraries Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <style>
    /* Enhanced Professional Library Books Styles */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --warning-gradient: linear-gradient(135deg, #fdbb2d 0%, #22c1c3 100%);
        --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        --card-hover-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%) !important;
        font-family: 'Roboto', sans-serif;
    }

    /* Enhanced main card */
    .books-main-card {
        background: white;
        border-radius: 20px;
        box-shadow: var(--card-shadow);
        border: 1px solid rgba(255, 255, 255, 0.8);
        overflow: hidden;
    }

    .books-header {
        background: var(--primary-gradient);
        color: white;
        padding: 2rem;
        margin: -1.5rem -1.5rem 1.5rem;
        position: relative;
        overflow: hidden;
    }

    .books-header::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transform: translate(30px, -30px);
    }

    .books-header h6 {
        margin: 0;
        font-weight: 600;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .books-header p {
        margin: 0.5rem 0 0;
        opacity: 0.9;
        font-size: 0.9rem;
    }

    /* Enhanced search container */
    .search-container {
        margin: 1.5rem;
        position: relative;
    }

    .search-input-enhanced {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 2px solid #e9ecef;
        border-radius: 15px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.9);
    }

    .search-input-enhanced:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        outline: none;
        background: white;
    }

    .search-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        z-index: 2;
    }

    /* Enhanced table */
    .table-enhanced {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .table-enhanced thead {
        background: linear-gradient(135deg, #f8f9ff 0%, #e3e7ff 100%);
    }

    .table-enhanced th {
        border: none;
        padding: 1.2rem 1rem;
        font-weight: 600;
        color: #667eea;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.75rem;
    }

    .table-enhanced td {
        border: none;
        padding: 1.2rem 1rem;
        border-bottom: 1px solid #f1f3f7;
        vertical-align: middle;
    }

    .table-enhanced tbody tr {
        transition: all 0.3s ease;
    }

    .table-enhanced tbody tr:hover {
        background: rgba(102, 126, 234, 0.05);
        transform: scale(1.01);
    }

    .book-title {
        font-weight: 600;
        color: #2d3748;
        font-size: 1rem;
        margin-bottom: 0.25rem;
    }

    .book-author {
        color: #6c757d;
        font-size: 0.85rem;
        font-style: italic;
    }

    .book-description {
        color: #4a5568;
        font-size: 0.85rem;
        line-height: 1.4;
    }

    .book-genre {
        background: var(--primary-gradient);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
    }

    .availability-badge {
        padding: 0.5rem 1rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.8rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .availability-available {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
    }

    .availability-borrowed {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        color: #721c24;
    }

    /* Enhanced action buttons */
    .action-btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 10px;
        font-weight: 500;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }

    .btn-edit {
        background: var(--warning-gradient);
        color: white;
    }

    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(253, 187, 45, 0.4);
        color: white;
    }

    /* Enhanced pagination */
    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        padding: 2rem;
        background: rgba(102, 126, 234, 0.03);
        margin: 1.5rem -1.5rem -1.5rem;
        border-top: 1px solid rgba(102, 126, 234, 0.1);
    }

    .pagination-btn {
        padding: 0.75rem 1.5rem;
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .pagination-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    .pagination-btn:disabled {
        background: #e9ecef;
        color: #6c757d;
        cursor: not-allowed;
        box-shadow: none;
    }

    .page-info {
        color: #667eea;
        font-weight: 600;
        font-size: 0.9rem;
    }

    /* Enhanced sidebar */
    .sidenav {
        background: linear-gradient(180deg, #2d3748 0%, #1a202c 100%) !important;
        border-radius: 20px !important;
        box-shadow: var(--card-shadow) !important;
    }

    .sidenav .navbar-brand {
        padding: 1.5rem 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidenav .nav-link {
        border-radius: 12px;
        margin: 0.25rem 1rem;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
    }

    .sidenav .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }

    /* Enhanced header */
    .navbar-main {
        background: white !important;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1) !important;
        border-radius: 15px !important;
        margin: 1rem !important;
    }

    .breadcrumb {
        background: transparent !important;
    }

    .breadcrumb-item a {
        color: #667eea !important;
        text-decoration: none;
        font-weight: 500;
    }

    /* Clock styling */
    .clock {
        background: var(--primary-gradient);
        color: white !important;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .books-header {
            padding: 1.5rem;
        }
        
        .books-header h6 {
            font-size: 1.1rem;
        }
        
        .search-container {
            margin: 1rem;
        }
        
        .table-enhanced td, .table-enhanced th {
            padding: 0.8rem 0.5rem;
        }
        
        .pagination-container {
            flex-direction: column;
            gap: 0.5rem;
        }
    }

    /* Loading animation */
    .loading-shimmer {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }
</style>
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logos.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Eva Marie Libraries</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
<?php include './includes/navheader.php'; ?>
   
    <!-- End Navbar -->

  <!-- Tables for Borrowing History -->
  <div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card books-main-card my-4">
                        <div class="books-header">
                            <h6>📚 Library Books Collection</h6>
                            <p>Browse and manage your complete book inventory</p>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="search-container">
                                <i class="material-icons search-icon">search</i>
                                <input class="search-input-enhanced" type="text" id="search-input" placeholder="Search by title, author, or genre..." />
                            </div>
                            
                            <div class="table-responsive p-0">
                                <table class="table table-enhanced align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Book Information</th>
                                            <th>Description</th>
                                            <th>Genre</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="book-table-body">
                                        <!-- Book information will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="pagination-container">
                                <button id="prev-page" class="pagination-btn" disabled>← Previous</button>
                                <span id="page-number" class="page-info">Page 1</span>
                                <button id="next-page" class="pagination-btn">Next →</button>
                            </div>
                        </div>
                    </div>
                                    <button id="next-page"class="btn bg-gradient-dark mb-0">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer py-4">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                   
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end"></ul>
                </div>
            </div>
        </div>
    </footer>
</div>

    <script>
            document.addEventListener('DOMContentLoaded', () => {
                
                const pageSize = 10; // Number of items per page

                //Fetch and populate data with pagination
                // const fetchbigData = (page) => {
                //     const url = `https://admin.evamarielibraries.org/api/books-metas/?populate=*&pagination[page]=${page}&pagination[pageSize]=${pageSize}`;
                //     fetchBooks(url);
                 });

            
            // Fetch books from a given URL and populate the table
            const fetchBooks = (url) => {
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer 8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    populateTable(data.data);

                    // Update pagination controls
                    if (data.meta) {
                        document.getElementById('page-number').textContent = `Page ${currentPage}`;
                        document.getElementById('prev-page').disabled = currentPage === 1;
                        document.getElementById('next-page').disabled = data.meta.pagination.page === data.meta.pagination.pageCount;
                    }
                })
                .catch(error => console.error('Error fetching books:', error));
            };

            // Populate the table with book data
            const populateTable = (books) => {
                const tableBody = document.getElementById('book-table-body');
                tableBody.innerHTML = ''; // Clear existing data

                if (books.length === 0) {
                    tableBody.innerHTML = `
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <div style="color: #6c757d;">
                                    <i class="material-icons" style="font-size: 3rem; opacity: 0.5;">search_off</i>
                                    <p class="mt-2 mb-0">No books found matching your search criteria</p>
                                </div>
                            </td>
                        </tr>
                    `;
                    return;
                }

                books.forEach(book => {
                    const row = document.createElement('tr');
                    const availability = book.attributes.availability;
                    const availabilityClass = availability ? 'availability-available' : 'availability-borrowed';
                    const availabilityIcon = availability ? 'check_circle' : 'schedule';
                    const availabilityText = availability ? 'Available' : 'Borrowed';
                    
                    row.innerHTML = `
                        <td>
                            <div>
                                <div class="book-title">${book.attributes.title}</div>
                                <div class="book-author">by ${book.attributes.author}</div>
                            </div>
                        </td>
                        <td>
                            <div class="book-description">${book.attributes.description.length > 100 ? 
                                book.attributes.description.substring(0, 100) + '...' : 
                                book.attributes.description}</div>
                        </td>
                        <td>
                            <span class="book-genre">${book.attributes.genre}</span>
                        </td>
                        <td>
                            <span class="availability-badge ${availabilityClass}">
                                <i class="material-icons" style="font-size: 1rem;">${availabilityIcon}</i>
                                ${availabilityText}
                            </span>
                        </td>
                        <td>
                            <a href="editbook.php?id=${book.id}" 
                                class="action-btn btn-edit" 
                                data-book-id="${book.id}" 
                                data-title="${book.attributes.title.replace(/'/g, "&#39;")}" 
                                data-author="${book.attributes.author.replace(/'/g, "&#39;")}" 
                                data-genre="${book.attributes.genre.replace(/'/g, "&#39;")}" 
                                data-language="${book.attributes.language.replace(/'/g, "&#39;")}" 
                                data-pages="${book.attributes.pages}" 
                                data-publication-date="${book.attributes.publicationDate}" 
                                data-rating="${book.attributes.rating}" 
                                data-times-borrowed="${book.attributes.timesBorrowed}" 
                                data-description="${book.attributes.description.replace(/'/g, "&#39;")}" 
                                data-availability="${book.attributes.availability}" 
                                data-isbn="${book.attributes.isbn}">
                                <i class="material-icons" style="font-size: 1rem;">edit</i>
                                Edit Book
                            </a>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            };

            // Search functionality
            document.getElementById('search-input').addEventListener('input', (event) => {
                const query = event.target.value.trim().toLowerCase();

                if (query.length > 0) {
                    const url = `https://admin.evamarielibraries.org/api/books-metas/?populate=*&filters[$or][0][title][$containsi]=${query}&filters[$or][1][author][$containsi]=${query}`;
                    fetchBooks(url);
                } else {
                    // Reload paginated data when search is cleared
                    fetchData(currentPage);
                }
            });

            // Initial fetch for paginated data
            let currentPage = 1; // Ensure currentPage is declared
            const fetchData = (page) => {
                const url = `https://admin.evamarielibraries.org/api/books-metas/?populate=*&pagination[page]=${page}&pagination[pageSize]=10`;
                fetchBooks(url);
            };
            fetchData(currentPage);

            // Pagination controls
            document.getElementById('prev-page').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    fetchData(currentPage);
                }
            });

            document.getElementById('next-page').addEventListener('click', () => {
                currentPage++;
                fetchData(currentPage);
            });

            // Handle clicks on the Edit button
            document.addEventListener('click', function (event) {
                if (event.target.matches('[data-book-id]')) {
                    const link = event.target;
                    const bookData = {
                        id: link.getAttribute('data-book-id'),
                        title: link.getAttribute('data-title'),
                        author: link.getAttribute('data-author'),
                        genre: link.getAttribute('data-genre'),
                        language: link.getAttribute('data-language'),
                        pages: link.getAttribute('data-pages'),
                        publicationDate: link.getAttribute('data-publication-date'),
                        rating: link.getAttribute('data-rating'),
                        timesBorrowed: link.getAttribute('data-times-borrowed'),
                        description: link.getAttribute('data-description'),
                        availability: link.getAttribute('data-availability'),
                        isbn: link.getAttribute('data-isbn'),
                    };
                    saveBookData(bookData);
                }
            });

            function saveBookData(book) {
                console.log('data:', book);
                // Save data to localStorage
                localStorage.setItem('editBook', JSON.stringify(book));

                // Redirect to edit page
                window.location.href = `./editbook.php?bookId=${book.id}`;
            }
        
    
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
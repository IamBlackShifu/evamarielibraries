
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
  
</head>
<style>
/* Enhanced Professional Dashboard Styles */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --warning-gradient: linear-gradient(135deg, #fdbb2d 0%, #22c1c3 100%);
    --info-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    --card-hover-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%) !important;
    font-family: 'Roboto', sans-serif;
}

/* Enhanced Stats Cards */
.stats-card {
    background: white;
    border-radius: 20px;
    box-shadow: var(--card-shadow);
    transition: all 0.3s ease;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(255, 255, 255, 0.8);
}

.stats-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--card-hover-shadow);
}

.stats-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--primary-gradient);
}

.stats-card .icon-wrapper {
    background: var(--primary-gradient);
    width: 70px;
    height: 70px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -10px;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

.stats-card .icon-wrapper i {
    font-size: 28px;
    color: white;
}

.stats-card .stats-number {
    font-size: 2.2rem;
    font-weight: 700;
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin: 0.5rem 0;
}

.stats-card .stats-label {
    color: #6c757d;
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.stats-card .stats-footer {
    background: rgba(102, 126, 234, 0.05);
    margin: 1rem -1.5rem -1.5rem;
    padding: 1rem 1.5rem;
    border-top: 1px solid rgba(102, 126, 234, 0.1);
}

/* Enhanced Request Queue */
.request-queue-card {
    background: white;
    border-radius: 20px;
    box-shadow: var(--card-shadow);
    border: 1px solid rgba(255, 255, 255, 0.8);
    overflow: hidden;
}

.request-queue-header {
    background: var(--primary-gradient);
    color: white;
    padding: 1.5rem;
    margin: -1.5rem -1.5rem 1.5rem;
}

.request-queue-header h6 {
    margin: 0;
    font-weight: 600;
    font-size: 1.1rem;
}

.request-item {
    background: rgba(102, 126, 234, 0.03);
    border: 1px solid rgba(102, 126, 234, 0.1);
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
    position: relative;
}

.request-item:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border-color: rgba(102, 126, 234, 0.3);
}

.request-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: var(--primary-gradient);
    border-radius: 0 4px 4px 0;
}

.request-item .book-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 0.75rem;
}

.request-item .request-details {
    font-size: 0.85rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.request-item .request-details strong {
    color: #2d3748;
    font-weight: 600;
}

.action-buttons {
    display: flex;
    gap: 0.5rem;
    margin-top: 1rem;
}

.btn-approve {
    background: var(--success-gradient);
    border: none;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
    font-size: 0.85rem;
}

.btn-approve:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(79, 172, 254, 0.4);
}

.btn-return {
    background: var(--secondary-gradient);
    border: none;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
    font-size: 0.85rem;
}

.btn-return:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(240, 147, 251, 0.4);
}

/* Enhanced Pagination */
.pagination-controls {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.pagination-controls button {
    padding: 0.75rem 1.5rem;
    background: var(--primary-gradient);
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.pagination-controls button:hover:not(.disabled) {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

.pagination-controls button.disabled {
    background: #e9ecef;
    color: #6c757d;
    cursor: not-allowed;
    box-shadow: none;
}

/* Enhanced Sidebar */
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

/* Enhanced Header */
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

/* Loading states */
.loading-shimmer {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

/* Responsive design */
@media (max-width: 768px) {
    .stats-card {
        margin-bottom: 1rem;
    }
    
    .request-item {
        padding: 1rem;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .pagination-controls {
        flex-direction: column;
        align-items: center;
    }
}

/* Add some animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.stats-card {
    animation: fadeInUp 0.6s ease-out;
}

.stats-card:nth-child(1) { animation-delay: 0.1s; }
.stats-card:nth-child(2) { animation-delay: 0.2s; }
.stats-card:nth-child(3) { animation-delay: 0.3s; }
</style>


<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logos.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Eva Marie Libraries</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <?php include './includes/navheader.php'; ?>

    

 
  
    <!-- End Of script to Fetch Data -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card stats-card">
            <div class="card-header p-3 pt-2">
              <div class="icon-wrapper">
                <i class="material-icons opacity-10">book</i>
              </div>
              <div class="text-end pt-1">
                <p class="stats-label mb-0">Last Book Activity</p>
                <!-- displaying last book borrowed/returned on the dashboard -->
                <h4 class="stats-number mb-0"><span id="last-book-title">Loading...</span></h4>
            </div>
        
            <script>
                // Function to fetch and display the last book borrowed/returned
                async function fetchLastBook() {
                    try {
                        const response = await fetch('https://admin.evamarielibraries.org/api/borrowedbooks?populate=*', {
                            headers: {
                                'Authorization': 'Bearer 8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25'
                            }
                        });
                        const data = await response.json();
                        const lastBook = data.data[data.data.length - 1];
                        const lastBookTitle = lastBook.attributes.bookdetail[0].title;
        
                        document.getElementById('last-book-title').textContent = lastBookTitle;
                    } catch (error) {
                        document.getElementById('last-book-title').textContent = 'No Recent Activity';
                        console.error('Error fetching the last book:', error);
                    }
                }
        
                // Call the function to fetch and display the last book
                fetchLastBook();
            </script>
            </div>
            <div class="stats-footer">
               <!-- displaying transaction time on dasboard -->
              <p class="mb-0"><span class="text-success font-weight-bolder" id="transaction-time">Recent Activity</span> | Book Status</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card stats-card">
              <div class="card-header p-3 pt-2">
                  <div class="icon-wrapper">
                      <i class="material-icons opacity-10">library_books</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="stats-label mb-0">Total Library Books</p>
                    <h4 id="total-books-count" class="stats-number mb-0">Loading...</h4>
                  </div>
                  
              </div>
              <div class="stats-footer">
                  <p class="mb-0"><span class="text-info font-weight-bolder">View Collection</span> | All Books</p>
              </div>
          </div>
      </div>
      
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          // Define the endpoint URL and the authorization token
          const endpoint = 'https://admin.evamarielibraries.org/api/borrowedbooks/';
          const token = '8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25';
      
          // Fetch total books from the booksmeta endpoint
          fetch(endpoint, {
            headers: {
              'Authorization': `Bearer ${token}`,
              'Content-Type': 'application/json'
            }
          })
          .then(response => response.json())
          .then(data => {
            //console.log(data);  // Log the data to check its structure
      
            // Assuming the total number of books is available in a property called 'total'
            // Adjust the property name according to the actual response structure
            const totalBooks = data.meta.pagination.total;
      
            // Update the HTML content with the total number of books
            const totalBooksElement = document.getElementById('total-books-borrowed');
            if (totalBooksElement) {
              totalBooksElement.textContent = totalBooks || 0; // Display 0 if totalBooks is undefined
            }
          })
          .catch(error => {
            console.error('Error fetching booksmeta:', error);
            const totalBooksElement = document.getElementById('total-books-borrowed');
            if (totalBooksElement) {
              totalBooksElement.textContent = '0';
            }
          });
        });
      </script>

         <script>
        document.addEventListener('DOMContentLoaded', () => {
          // Define the endpoint URL and the authorization token
          const endpoint = 'https://admin.evamarielibraries.org/api/books-metas/';
          const token = '8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25';
      
          // Fetch total books from the booksmeta endpoint
          fetch(endpoint, {
            headers: {
              'Authorization': `Bearer ${token}`,
              'Content-Type': 'application/json'
            }
          })
          .then(response => response.json())
          .then(data => {
            console.log(data);  // Log the data to check its structure
      
            // Assuming the total number of books is available in a property called 'total'
            // Adjust the property name according to the actual response structure
            const totalBookscount = data.meta.pagination.total;
      
            // Update the HTML content with the total number of books
            const totalBooksElementcount = document.getElementById('total-books-count');
            totalBooksElementcount.textContent = totalBookscount || 0; // Display 0 if totalBooks is undefined
          })
          .catch(error => {
            console.error('Error fetching booksmeta:', error);
            const totalBooksElementcount = document.getElementById('total-books-count');
            if (totalBooksElementcount) {
              totalBooksElementcount.textContent = '0';
            }
          });
        });
      </script>
      
        
      <div class="col-xl-4 col-sm-6">
        <div class="card stats-card">
            <div class="card-header p-3 pt-2">
                <div class="icon-wrapper">
                    <i class="material-icons opacity-10">trending_up</i>
                </div>
                <div class="text-end pt-1">
                    <p class="stats-label mb-0">Books Borrowed</p>
                    <!-- Add an ID to the h4 element to update its content dynamically -->
                    <h4 id="total-books-borrowed" class="stats-number mb-0">Loading...</h4> <!--todays-total-revenue-->
                </div>
            </div>
            <div class="stats-footer">
                <p class="mb-0"><span class="text-warning font-weight-bolder">Since Launch</span> | Total Count</p>
            </div>
        </div>
    </div>
    
    
    

      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <!-- <div class="col-md-6">
                  <h6 class="mb-0">Recently Borrowed Books</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center"> -->
                  <!-- <i class="material-icons me-2 text-lg">date_range</i> -->
                  
                <!-- </div>
              </div>
            </div> -->
            <!-- <div class="card-body pt-4 p-3">
              <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
              <ul class="list-group" id="book-list"> -->
                <!-- List items will be populated here by JavaScript -->
              <!-- </ul>
            </div>
             -->
            <script>
            // Fetch book details from the endpoint
            fetch('https://admin.evamarielibraries.org/api/borrowedbooks?populate=*&_sort=createdAt:desc&_limit=5',{
              headers: {
                'Authorization': 'Bearer 8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25',
                'Content-Type': 'application/json'
              }
            })
              .then(response => response.json())
              .then(data => {
                console.log(data);  // Log the data to check its structure
            
                const books = data.data; // Access the array of books
                const bookList = document.getElementById('book-list');
            
                books.forEach(book => {
                  // Assuming bookdetail information is stored within attributes, adjust as necessary
                  const availabilityStatus = book.attributes.availability ? 'Returned' : 'Borrowed';
                  const availabilityClass = book.attributes.availability ? 'text-success' : 'text-danger';
                  const buttonClass = book.attributes.availability ? 'btn-outline-success' : 'btn-outline-danger';
                  const buttonIcon = book.attributes.availability ? 'expand_less' : 'expand_more';
            
                  const listItem = document.createElement('li');
                  listItem.className = 'list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg';
            
                  listItem.innerHTML = `
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded ${buttonClass} mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center">
                        <i class="material-icons text-lg">${buttonIcon}</i>
                      </button>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Book Name: <span>${book.attributes.bookdetail[0].title}</span></h6>
                        <span>Borrowed By: ${book.attributes.userid}</span>
                        <span>Date and Time: ${new Date(book.attributes.createdAt).toLocaleString()}</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center ${availabilityClass} text-gradient text-sm font-weight-bold">
                      <h6>${availabilityStatus}</h6>
                    </div>
                  `;
            
                  bookList.appendChild(listItem);
                });
              })
              .catch(error => console.error('Error fetching book data:', error));
            </script>
            
            
          </div>
        </div>
        <div class="col-md-12 mt-4">
          <div class="card request-queue-card">
            <div class="request-queue-header">
              <h6 class="mb-0">📋 Borrowing Request Details Queue</h6>
              <p class="mb-0 small opacity-8">Manage pending book requests</p>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group" id="request-queue">
                <!-- List items will be populated here by JavaScript -->
              </ul>
              <div class="pagination-controls" id="pagination-controls">
            <!-- Pagination buttons will be inserted here dynamically -->
              </div>
            </div>
          </div>
        </div>

        <script>

  let currentPage = 0;
  const itemsPerPage = 10;

  // Load Borrowed Books
  function loadRequests(page = 0) {
    currentPage = page;
    const offset = page * itemsPerPage;

    fetch(
      `https://admin.evamarielibraries.org/api/borrowedbooks?populate=*&sort[0]=createdAt:desc&pagination[start]=${offset}&pagination[limit]=${itemsPerPage}`,
      {
        headers: {
        'Authorization': 'Bearer 8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25',
        'Content-Type': 'application/json',
      },
      }
    )
      .then((response) => response.json())
      .then((data) => {
        const requests = data.data;
        const requestQueue = document.getElementById('request-queue');

        // Clear the previous list before adding new records
        requestQueue.innerHTML = '';

        requests.forEach((request) => {
          const attributes = request.attributes;
          const requestDate = attributes.createdAt
            ? new Date(attributes.createdAt).toLocaleDateString()
            : 'N/A';
          const user = attributes.userid || 'N/A';
          const bookTitle = attributes.bookdetail[0]?.title || 'N/A';
          const phoneNumber = attributes.phoneNo || 'N/A';
          const category = attributes.bookdetail[0]?.genre || 'N/A';

          const listItem = document.createElement('li');
          listItem.className = 'list-group-item border-0 p-0 mb-3';

          listItem.innerHTML = `
            <div class="request-item">
              <div class="book-title">${bookTitle}</div>
              <div class="request-details">Requested By: <strong>${user}</strong></div>
              <div class="request-details">Phone Number: <strong>${phoneNumber}</strong></div>
              <div class="request-details">Category: <strong>${category}</strong></div>
              <div class="request-details">Date: <strong>${requestDate}</strong></div>
              <div class="action-buttons">
                <button class="btn-approve approve-btn" data-book-id="${attributes.bookdetail[0].id}">✓ Approve</button>
                <button class="btn-return return-btn" data-book-id="${request.id}">↩ Return</button>
              </div>
            </div>
          `;
          requestQueue.appendChild(listItem);
        });

        // Update Pagination Controls
        updatePaginationControls(data.meta.pagination);
        addEventListeners();
      })
      .catch((error) => console.error('Error fetching book requests:', error));
  }

  // Update Pagination Controls
  function updatePaginationControls(pagination) {
    const paginationControls = document.getElementById('pagination-controls');
    const prevDisabled = currentPage === 0 ? 'disabled' : '';
    const nextDisabled = currentPage + 1 >= pagination.pageCount ? 'disabled' : '';
    
    paginationControls.innerHTML = `
      <button class="${prevDisabled}" onclick="loadRequests(${currentPage - 1})" ${prevDisabled ? 'disabled' : ''}>
        ← Previous
      </button>
      <span style="display: flex; align-items: center; color: #667eea; font-weight: 600; margin: 0 1rem;">
        Page ${currentPage + 1} of ${pagination.pageCount}
      </span>
      <button class="${nextDisabled}" onclick="loadRequests(${currentPage + 1})" ${nextDisabled ? 'disabled' : ''}>
        Next →
      </button>
    `;
  }

  // Add Event Listeners for Approve and Return Buttons
  function addEventListeners() {
    // Approve Button
    document.querySelectorAll('.approve-btn').forEach((button) => {
      button.addEventListener('click', function () {
        const bookId = this.getAttribute('data-book-id');
        updateBookAvailability(bookId, this);
      });
    });

    // Return Button
    document.querySelectorAll('.return-btn').forEach((button) => {
      button.addEventListener('click', function () {
        const bookId = this.getAttribute('data-book-id');
        if (confirm('Are you sure you want to return this book?')) {
          deleteBorrowedBook(bookId, this);
        }
      });
    });
  }

  // Approve Book (Update Availability)
  function updateBookAvailability(bookId, button) {
    fetch(`https://admin.evamarielibraries.org/api/books-metas/${bookId}`, {
      method: 'PUT',
      headers: {
        'Authorization': 'Bearer 8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25',
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        data: { availability: false },
      }),
    })
      .then((response) => response.json())
      .then(() => {
        alert('Book approved successfully!');
        const listItem = button.closest('li');
        listItem.remove(); // Remove the approved book from the list
      })
      .catch((error) => console.error('Error updating book availability:', error));
  }

  // Delete Borrowed Book Record
  function deleteBorrowedBook(bookId, button) {
    fetch(`https://admin.evamarielibraries.org/api/borrowedbooks/${bookId}`, {
      method: 'DELETE',
      headers: {
        'Authorization': 'Bearer 8a751582219d16d9a8a64c10e4b419b9763acb0f90d3b1dcf9ab978308ff4c5585ee8b2fb516b57c86646d2620afe2acff22194957bb09fceccb71e8cbec9850c710eb3c4aecb0257e5839e5235c960e11d3444edd60e0b00e7681d912c5b3d55013f9207d52ee111dc81d861f972e7b5cd25628a8c2f9dba50cceec04dfed25',
        'Content-Type': 'application/json',
      },
    })
      .then((response) => {
        if (response.ok) {
          alert('Book returned successfully!');
          const listItem = button.closest('li');
          listItem.remove(); // Remove the returned book from the list
        } else {
          throw new Error('Failed to return the book.');
        }
      })
      .catch((error) => console.error('Error returning book:', error));
  }

  // Initial Load
  loadRequests();
</script>

        
       
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              
            </div>
           
          </div>
        </div>
      </footer>
    </div>
  </main>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!-- <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script> -->
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
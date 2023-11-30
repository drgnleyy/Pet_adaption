<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            height: 500px;
            overflow-x: hidden;
        }
        .bg-image {
            height: 100%;
            width: 100vw;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .c-item {
            height: 100px;
        }
        .c-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }
        
        .card {
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, 0.1);
        }
        .card-header,
        #tableId th,
        #tableId td {
            color: black;
        }
        .form-border {
            border: 2px solid black;
            padding: 20px;
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.1);
            width: 400px;
            border-radius: 14px;
        }
        .form-label {
            color: black;
        }
        .form-text {
            color: black;
        }
        .form-check-label {
            color: black;
        }
        .form-control {
            width: 100%;
        }

        /* Additional styles for the About page */
        h1 {
            color: #0066cc;
            position: center;
        }
        p {
            line-height: 1.6;
            color: black;
        }
        h2 {
            color: #0066cc;
        }
        body {
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 0;
        }

        

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            background-color: #F0DCCA;
            padding-top: 20px;
            color: White;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .sidebar a {
            padding: 16px;
            text-decoration: none;
            font-size: 18px;
            color:#6C3110;
        }

        .sidebar a:hover {
            background-color: #5F2C17;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

  </style>
</body>
</html>
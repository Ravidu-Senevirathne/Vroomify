<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h2 class="logo">Vroomify</h2>
                <p>Find the best cars in your region</p>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/cars">Browse Cars</a></li>
                        <li><a href="/add-new">Sell Your Car</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li><a href="/terms">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li>Email: info@vroomify.com</li>
                        <li>Phone: +1 (555) 123-4567</li>
                        <li>Address: 123 Car Street, Auto City</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; {{ date('Y') }} Vroomify. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer {
        background-color: #fff;
        padding: 3rem 0 1rem;
        margin-top: 2rem;
        box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.1);
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .footer-logo {
        flex: 1;
        min-width: 250px;
    }

    .footer-logo p {
        color: var(--text-muted-color);
        margin-top: 0.5rem;
    }

    .footer-links {
        flex: 2;
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .footer-column {
        flex: 1;
        min-width: 150px;
    }

    .footer-column h3 {
        font-size: 1.1rem;
        margin-bottom: 1rem;
        color: var(--primary-color);
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-column ul li {
        margin-bottom: 0.75rem;
    }

    .footer-column ul li a {
        color: var(--text-color);
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-column ul li a:hover {
        color: var(--primary-color);
    }

    .copyright {
        text-align: center;
        padding-top: 1rem;
        border-top: 1px solid #eee;
        color: var(--text-muted-color);
        font-size: 0.9rem;
    }

    @media screen and (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            gap: 1.5rem;
        }

        .footer-links {
            gap: 1.5rem;
        }
    }
</style>

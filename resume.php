<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Russel Suarez - Frontend Developer Resume</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Add html2pdf.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        h1 {
            margin-bottom: 5px;
            font-size: 28px;
            border-bottom: 2px solid #FFB41D;
            padding-bottom: 10px;
        }
        h2 {
            font-size: 20px;
            margin-top: 25px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .section {
            margin-bottom: 20px;
        }
        .job, .project, .education-item {
            margin-bottom: 15px;
        }
        .job-title, .project-title, .degree {
            font-weight: bold;
        }
        .company, .tech-stack, .institution {
            font-style: italic;
        }
        .duration {
            color: #7f8c8d;
            font-size: 14px;
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 5px;
        }
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .skill {
            background: #f0f0f0;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 14px;
        }
        .references {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .reference {
            width: 48%;
            margin-bottom: 15px;
        }

        .go-home {
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }

        .go-home .btn {
            color: #0F172A;
            text-decoration: none;
            transition: 0.3s;
            padding: 10px;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: underline;
            text-underline-offset: 5px;
            transition: all 0.3s ease;
        }

        .go-home button {
            width: auto;
            height: 45px;
            margin-left: auto;
            color: #FFFFFF;
            text-decoration: none;
            transition: 0.3s;
            padding: 10px;
            background: #FFB41D;
            border: none;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* Loading spinner for PDF generation */
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
            vertical-align: middle;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="go-home">
        <a href="index.php" class="btn">
            Go to Home
        </a>
        
        <button id="downloadBtn">Download Resume</button>
    </div>
    <div id="resume-content">
        <div>
            <h1>JOHN RUSSEL SUAREZ</h1>
            <div class="contact-info">
                <p>San Miguel, Bohol 6323 | +639302998650 | jorusszeraus@gmail.com</p>
            </div>
        </div>

        <div class="section">
            <h2>ABOUT ME</h2>
            <p>Innovative Front End Developer known for high productivity and efficient task completion. Possess specialized skills in JavaScript, React, and CSS, enabling the creation of visually appealing and user-friendly websites. Excel in problem-solving, teamwork, and communication, leveraging these soft skills to effectively collaborate with cross-functional teams and ensure project success.</p>
        </div>

        <div class="section">
            <h2>SKILLS</h2>
            <div class="skills-list">
                <span class="skill">HTML/CSS development</span>
                <span class="skill">JavaScript frameworks</span>
                <span class="skill">PHP</span>
                <span class="skill">WordPress</span>
                <span class="skill">React.js</span>
                <span class="skill">Next.js</span>
                <span class="skill">Typescript</span>
                <span class="skill">Restful APIs</span>
                <span class="skill">Redux</span>
                <span class="skill">Tailwind CSS</span>
                <span class="skill">Bootstrap</span>
                <span class="skill">Flexbox</span>
                <span class="skill">Grid CSS</span>
                <span class="skill">SASS and LESS</span>
                <span class="skill">Webpack</span>
                <span class="skill">Babel</span>
                <span class="skill">Mysql</span>
                <span class="skill">Git</span>
                <span class="skill">SEO principles</span>
                <span class="skill">Application debugging</span>
                <span class="skill">Cross-browser compatibility</span>
                <span class="skill">Responsive design</span>
                <span class="skill">Performance optimization</span>
                <span class="skill">Team collaboration</span>
                <span class="skill">Troubleshooting</span>
            </div>
        </div>

        <div class="section">
            <h2>WORK EXPERIENCE</h2>
            
            <div class="job">
                <div class="job-header">
                    <span class="job-title">Front End Developer</span> - 
                    <span class="company">Blendit</span>
                    <span class="duration">June 2022 - April 2025</span>
                </div>
                <ul>
                    <li>Developed fully responsive web applications using HTML, CSS, and modern JavaScript frameworks.</li>
                    <li>Collaborated closely with UI/UX designers to translate high-fidelity designs into intuitive, user-friendly interfaces.</li>
                    <li>Integrated RESTful APIs to enhance application functionality and streamline data handling.</li>
                    <li>Optimized website performance by identifying and resolving issues through advanced debugging techniques.</li>
                    <li>Ensured clean, semantic HTML, and CSS that adhered to industry standards and best practices.</li>
                    <li>Created custom, mobile-first designs tailored to various screen sizes and devices.</li>
                    <li>Built modular, reusable components to improve development efficiency and consistency across projects.</li>
                    <li>Implemented dynamic front-end logic by integrating UI components with back-end APIs.</li>
                    <li>Worked in tandem with back-end developers to deliver seamless, full-stack functionality.</li>
                    <li>Proactively resolved front-end bugs and performance issues in existing codebases.</li>
                    <li>Participated in agile development cycles, including daily stand-ups, and sprint planning sessions with stakeholders.</li>
                    <li>Addressed and resolved cross-browser compatibility issues to ensure a consistent user experience.</li>
                    <li>Redesigned legacy websites to improve navigation, visual appeal, and user engagement.</li>
                    <li>Delivered measurable improvements in page load times and user performance metrics.</li>
                </ul>
            </div>
            
            <div class="job">
                <div class="job-header">
                    <span class="job-title">Marketing Staff</span> - 
                    <span class="company">Du Ek Sam Inc.</span>
                    <span class="duration">December 2018 - May 2022</span>
                </div>
                <ul>
                    <li>Worked closely with cross-functional marketing teams to plan, develop, and execute high-impact campaigns, resulting in a significant boost in brand visibility, enhanced customer engagement, and measurable growth in audience reach and loyalty.</li>
                    <li>Coordinated social media content and scheduling across various platforms.</li>
                    <li>Assisted in organizing community events to enhance brand visibility.</li>
                    <li>Managed email marketing campaigns to engage target audiences effectively.</li>
                    <li>Managed social media accounts on platforms such as Facebook, Twitter, Instagram.</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2>PROJECTS</h2>
            
            <div class="project">
                <div class="project-header">
                    <span class="project-title">Casheddy, Cashgo, Prestaluz, Nexdinero</span> - 
                    <span class="tech-stack">WordPress (PHP), HTML, CSS, JavaScript</span>
                </div>
                <p>A suite of fintech platforms facilitates quick and easy short-term loan applications. These platforms connect borrowers with lenders without the need for income verification or credit checks, offering approvals within 24 hours. Highlights: Fully online process, responsive UI, fast-loading pages, and user-first design.</p>
            </div>
            
            <div class="project">
                <div class="project-header">
                    <span class="project-title">Fineddy</span> - 
                    <span class="tech-stack">WordPress (PHP), HTML, CSS, JavaScript</span>
                </div>
                <p>A financial affiliate network designed to connect users with appropriate loan providers. Focused on lead generation through affiliate marketing, improving conversion rates, and usability. Highlights: Integrated lead generation tools, SEO best practices, optimized user flows.</p>
            </div>
            
            <div class="project">
                <div class="project-header">
                    <span class="project-title">Tabasco</span> - 
                    <span class="tech-stack">WordPress, HTML, CSS, JavaScript</span>
                </div>
                <p>Creative agency website showcasing design, branding, and advertising services. Built to reflect their artistic vision, and deliver a compelling portfolio experience. Highlights: Custom branding modules, animated content transitions, responsive, and accessible layouts.</p>
            </div>
            
            <div class="project">
                <div class="project-header">
                    <span class="project-title">Play Digital Signage</span> - 
                    <span class="tech-stack">React.js, HTML, CSS, JavaScript</span>
                </div>
                <p>A cloud-based platform for creating and managing digital signage content in real time across multiple devices. Highlights: Drag-and-drop content builder, device management dashboard, scalable component-based architecture.</p>
            </div>
            
            <div class="project">
                <div class="project-header">
                    <span class="project-title">Motodepoo</span> - 
                    <span class="tech-stack">React.js, Next.js, TypeScript, HTML, CSS</span>
                </div>
                <p>An e-commerce platform focused on motorcycle products and services. Designed for a seamless product browsing, service booking, and checkout experience. Highlights: Dynamic product catalog, interactive booking system, mobile-first design for enhanced accessibility.</p>
            </div>
        </div>

        <div class="section">
            <h2>EDUCATION</h2>
            
            <div class="education-item">
                <div class="degree">Bachelor of Science Information Technology</div>
                <div class="institution">Holy Name University Tagbilaran City, Bohol</div>
                <div class="duration">October 2018</div>
            </div>
            
            <div class="education-item">
                <div class="degree">High School</div>
                <div class="institution">San Miguel Technical Vocation School</div>
                <div class="duration">April 2013</div>
            </div>
        </div>

        <div class="section">
            <h2>WEBSITES AND PORTFOLIO</h2>
            <ul>
                <li>https://github.com/joshcoder14/portfolio</li>
                <li>https://prohive-freelance.free.nf/</li>
                <li>https://staging.motodepoo.ee/</li>
                <li>https://playsignage.com/</li>
                <li>https://casheddy.es/</li>
                <li>http://cashgo.es/</li>
                <li>https://nexdinero.es/</li>
                <li>https://prestaluz.es/</li>
                <li>https://fineddy.io/</li>
                <li>https://tabasco.ee/</li>
                <li>https://skiptraze.com/</li>
            </ul>
        </div>

        <div class="section">
            <h2>REFERENCES</h2>
            <div class="references">
                <div class="reference">
                    <h3>Melchor Lapinig Jr</h3>
                    <p>Software Engineer | TransVirtual</p>
                    <p>09095426595</p>
                    <p>lapinigmelchorjr@gmail.com</p>
                </div>
                <div class="reference">
                    <h3>Jmarc Avenido</h3>
                    <p>Software Engineer | Blenditoro</p>
                    <p>09481447095</p>
                    <p>avenidz31@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            const btn = this;
            const originalText = btn.innerHTML;
            
            // Show loading state briefly (even though it's fast with static file)
            btn.innerHTML = '<span class="spinner"></span> Preparing Download...';
            btn.disabled = true;
            
            // Path to your pre-made PDF file
            const pdfUrl = 'resume/John_Russel_Suarez_Resume.pdf';
            
            // Create a temporary anchor element to trigger download
            const a = document.createElement('a');
            a.href = pdfUrl;
            a.download = 'John_Russel_Suarez_Resume.pdf';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            
            // Restore button state after a short delay
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 1000);
        });        
    </script>
</body>
</html>
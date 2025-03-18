<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_Vendas.css">
    <title>Seu site está aqui!</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="./index.html">Início</a></li>
            <li><a href="./index.html#projetos">Meus Projetos</a></li>
            <li><a href="index.html#sobre">Sobre Mim</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </header>

    <section>
        <div class="secao">
            <div class="carousel-container">
                <div class="slide">
                    <img src="./img/Digital Consulting (1).png" alt="Desenvolvimento Web">
                    <div class="slide-text"></div>
                </div>
                <div class="slide">
                    <img src="./img/Digital Consulting (2).png" alt="Design Gráfico">
                    <div class="slide-text"></div>
                </div>
                <div class="slide">
                    <img src="./img/Digital Consulting.png" alt="Marketing Digital">
                    <div class="slide-text"></div>
                </div>
            </div>
            <div class="buttons">
                <button class="btn" onclick="prevSlide()">&#10094;</button>
                <button class="btn" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>
    </section>

    <section class="secao">
        <h2 class="titulo-secao">Peça seu orçamento</h2>
        <div class="form-container">
            <form id="contactForm">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Telefone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="business-type">Tipo de Negócio:</label>
                <input type="text" id="business-type" name="business-type" required>

                <label for="message">Conte o que deseja para seu site:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <section id="contato" class="secao">
        <h2 class="titulo-secao">Entre em Contato</h2>
        <div class="botoes-contato">
            <a href="https://wa.me/5541996899706" class="botao-contato whatsapp">

                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    loading="lazy">
                    <path fill="#FFFFFF"
                        d="M20.5 3.5A11.72 11.72 0 0 0 12 0 11.72 11.72 0 0 0 .5 12a11.73 11.73 0 0 0 1.6 5.88L0 24l6.42-2.03A11.71 11.71 0 0 0 12 23.5 11.72 11.72 0 0 0 20.5 3.5zM11 21a9.67 9.67 0 0 1-5-1.36l-.36-.22-3.81 1.2 1.23-3.7-.24-.38a9.65 9.65 0 1 1 8.18 4.46z" />
                    <path fill="#FFFFFF"
                        d="M17.36 13.48c-.3-.15-1.77-.88-2.05-.98-.27-.1-.47-.15-.66.15-.2.3-.76.98-.94 1.18-.17.2-.34.22-.64.07-.3-.15-1.25-.46-2.38-1.48a8.93 8.93 0 0 1-1.65-2c-.17-.3 0-.46.14-.63.14-.15.3-.35.44-.52.15-.17.2-.3.3-.5.1-.2.05-.37 0-.52-.05-.15-.66-1.6-.9-2.2-.24-.6-.48-.52-.66-.53H7.06c-.2 0-.53.08-.8.37s-1.04 1-1.04 2.43 1.07 2.8 1.22 3c.15.2 2.12 3.24 5.15 4.55.72.3 1.28.47 1.72.6.72.23 1.38.2 1.9.12.58-.09 1.77-.73 2.02-1.44.25-.7.25-1.3.17-1.44-.08-.15-.27-.22-.57-.37z" />
                </svg>
                <span>Whatsapp</span>
            </a>
            <a href="https://www.linkedin.com/in/felipe-fortunato-570749207/" class="botao-contato linkedin">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    loading="lazy">
                    <path fill="#FFFFFF"
                        d="M22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0zM7.12 20.48H3.56V9h3.56v11.48zM5.34 7.4c-1.14 0-2.07-.92-2.07-2.06s.93-2.07 2.07-2.07c1.14 0 2.07.93 2.07 2.07s-.93 2.06-2.07 2.06zM20.48 20.48h-3.56v-5.6c0-1.33-.03-3.05-1.86-3.05-1.87 0-2.15 1.46-2.15 2.96v5.69h-3.56V9h3.42v1.57h.05c.48-.91 1.64-1.87 3.37-1.87 3.61 0 4.28 2.37 4.28 5.44v6.34z" />
                </svg>

                <span>LinkedIn</span>
            </a>
            <a href="mailto:felipefortu@gmail.com" class="botao-contato email">

                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    loading="lazy">
                    <path fill="#FFFFFF"
                        d="M12 12.713L.15 4.501A2.28 2.28 0 0 1 1.965 2h20.07c.82 0 1.56.447 1.815 1.126L12 12.713z" />
                    <path fill="#FFFFFF"
                        d="M.05 5.845V18.02c0 1.04.875 1.91 1.915 1.91h20.07c1.04 0 1.915-.87 1.915-1.91V5.846L12 14.982.05 5.845z" />
                </svg>
                <span>Email</span>
            </a>
            <a href="https://github.com/felipefortu33" class="botao-contato github">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    loading="lazy">
                    <path fill="#FFFFFF"
                        d="M12 0a12 12 0 0 0-3.79 23.4c.6.11.82-.26.82-.58v-2.1c-3.34.73-4.04-1.6-4.04-1.6-.55-1.41-1.35-1.79-1.35-1.79-1.1-.75.08-.74.08-.74 1.21.09 1.85 1.25 1.85 1.25 1.08 1.83 2.83 1.3 3.53.99.11-.79.42-1.3.77-1.6-2.66-.3-5.47-1.34-5.47-5.96 0-1.32.47-2.39 1.24-3.23-.13-.3-.54-1.52.12-3.16 0 0 1.02-.32 3.34 1.23a11.64 11.64 0 0 1 6.08 0c2.32-1.55 3.34-1.23 3.34-1.23.66 1.64.25 2.86.12 3.16.77.84 1.24 1.91 1.24 3.23 0 4.63-2.82 5.66-5.5 5.96.43.37.81 1.1.81 2.22v3.3c0 .32.22.7.82.58A12 12 0 0 0 12 0z" />
                </svg>

                <span>GitHub</span>
            </a>
        </div>
    </section>


    <footer>
        <a href="./login.php">Painel Administrador</a>
        <p>© 2025 Felipe Fortunato - Todos os direitos reservados.</p>
    </footer>

    <script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita recarregar a página

        let formData = new FormData(this);

        fetch("salvar_mensagem.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    alert(data.message);
                    document.getElementById("contactForm").reset(); // Limpa os campos
                    setTimeout(() => {
                        window.location.href = "vendas.php"; // Redireciona para a página inicial
                    }, 2000);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error("Erro:", error));
    });


    let index = 0;
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;

    function showSlide() {
        document.querySelector(".carousel-container").style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        index = (index + 1) % totalSlides;
        showSlide();
    }

    function prevSlide() {
        index = (index - 1 + totalSlides) % totalSlides;
        showSlide();
    }

    setInterval(nextSlide, 3000);
    </script>
</body>

</html>
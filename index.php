<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>The Beacon</title>
  </head>
  <body>
    <section class="top">
      <div class="center">
        <video autoplay loop muted>
          <source src="./assets/nuvens.mp4" />
        </video>
        <header class="knockout">
        
        <svg class="knockout-text-container" viewBox="0 0 100 20" preserveAspectRatio="xMidYMid meet">
            <defs>
                <mask id="knockout-text">
                <rect width="100%" height="100%" fill="#fff" />
                <text x="3.8" y="20" fill="#000" font-size="21.3" font-family="Archivo Black" text-anchor="start" letter-spacing="-0.5">
                    BEACON
                </text>
            </mask>
        </defs>
        <rect class="knockout-text-bg" width="100%" height="100%" fill="#000" mask="url(#knockout-text)" />
        <text x="-2" y="19.2" fill="#FFF" font-size="7" font-family="Archivo Black" text-anchor="start" letter-spacing="-0.5" transform="rotate(-90, 2, 16)">THE</text>
        </svg>
        </header>

        <div class="hero">
          <img src="./assets/beacon.png" alt="" />
        </div>
      </div>
    </section>
    <section class="about">
      <div class="center">
        <div class="section-title-container">
          <div class="section-title">
            <span>SOBRE NÓS</span>
            <span>SOBRE NÓS</span>
          </div>
        </div>
        <p>
          Somos a The Beacon®, uma agência de desenvolvimento web de Amparo-SP,
          especializada em criar soluções digitais que conectam negócios ao seu
          público. Combinamos design criativo, tecnologia avançada e estratégias
          eficazes para desenvolver websites personalizados, otimizados para
          performance e resultados.Nosso compromisso é transformar a presença
          digital da sua empresa, ajudando sua marca a crescer, se destacar no
          mercado e construir conexões significativas com os clientes. Seja um
          pequeno negócio ou uma grande empresa, estamos prontos para levar suas
          ideias ao próximo nível.
        </p>
        <a href="/"><span>SAIBA MAIS</span></a>
      </div>
    </section>
  </body>
</html>

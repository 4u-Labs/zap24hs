<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
$assetVersion = time();
$whatsappNumber = "5511911303662";
$whatsappLink = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode("Olá! Gostaria de testar o Zap24hs na prática e tirar umas dúvidas.");
$whatsappLinkEn = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode("Hello! I would like to test Zap24hs live and learn more.");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Zap24hs — Sua Secretária Virtual com IA no WhatsApp 24h</title>
    <meta name="description" content="Atendimento inteligente e simultâneo para o WhatsApp da sua empresa 24 horas por dia. Economize mais de R$ 1.500/mês com até 1.500 atendimentos mensais.">
    
    <!-- Open Graph / WhatsApp / Facebook Share Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Zap24hs — 4u-Labs">
    <meta property="og:url" content="https://4u.ia.br/app/zap24hs/">
    <meta property="og:title" content="Zap24hs — Sua Secretária Virtual com IA no WhatsApp 24h">
    <meta property="og:description" content="Zero espera e zero clientes no vácuo. Atenda dezenas de clientes ao mesmo tempo no WhatsApp por apenas R$ 260/mês. Teste ao vivo agora!">
    <meta property="og:image" content="https://4u.ia.br/app/zap24hs/og-image.jpg">
    <meta property="og:image:secure_url" content="https://4u.ia.br/app/zap24hs/og-image.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter / X Share Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zap24hs — Atendimento Inteligente 24h no WhatsApp">
    <meta name="twitter:description" content="Substitua o custo de uma secretária por um atendimento 24/7 de alta conversão no seu próprio WhatsApp.">
    <meta name="twitter:image" content="https://4u.ia.br/app/zap24hs/og-image.jpg">

    <!-- Manifest and Favicon -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" sizes="64x64" href="favicon.png">
    <link rel="apple-touch-icon" href="icon-192.png">
    <meta name="theme-color" content="#00e676">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo $assetVersion; ?>">
</head>
<body data-lang="pt">

    <!-- Header / Navbar -->
    <header class="navbar">
        <div class="nav-container">
            <a href="./" class="brand">
                <img src="icon-192.png" alt="Zap24hs Logo" class="brand-logo" width="42" height="42">
                <div class="brand-text">
                    <span class="brand-name">Zap<span class="text-neon">24hs</span></span>
                    <span class="brand-badge">4u-Labs</span>
                </div>
            </a>

            <nav class="nav-links">
                <a href="#beneficios" data-i18n="navBenefits">Benefícios</a>
                <a href="#comparativo" data-i18n="navComparison">Comparativo</a>
                <a href="#como-funciona" data-i18n="navHowItWorks">Como Funciona</a>
                <a href="#precos" data-i18n="navPricing">Preços</a>
                <a href="#faq" data-i18n="navFaq">FAQ</a>
            </nav>

            <div class="nav-actions">
                <div class="lang-switch" aria-label="Seletor de idioma">
                    <button type="button" class="lang-btn active" data-set-lang="pt">PT</button>
                    <span class="lang-divider">|</span>
                    <button type="button" class="lang-btn" data-set-lang="en">EN</button>
                </div>
                <button type="button" class="btn-community" id="btn-community" aria-label="Ecossistema 4u-Labs">
                    <span>4u-Labs</span> <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </button>
                <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="btn-nav-cta" id="nav-cta-link">
                    <i class="fa-brands fa-whatsapp"></i> <span data-i18n="navCta">Testar ao Vivo</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="glow-orb glow-orb-1"></div>
        <div class="glow-orb glow-orb-2"></div>
        
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-tag">
                    <span class="tag-pulse"></span>
                    <span data-i18n="heroTag">● SECRETÁRIA COM IA • GOOGLE AGENDA & FOLLOW-UP</span>
                </div>
                <h1 class="hero-title" data-i18n="heroTitle">
                    Sua empresa respondendo <span class="text-gradient">no mesmo segundo</span>, 24 horas por dia.
                </h1>
                <p class="hero-subtitle" data-i18n="heroSubtitle">
                    Acabe com o cliente esperando no vácuo e indo para o concorrente. Atenda dezenas de pessoas simultaneamente com respostas humanas, treinadas com as regras do seu negócio, por uma fração do custo de um funcionário.
                </p>

                <div class="hero-cta-group">
                    <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="btn-hero-primary" id="hero-main-cta">
                        <i class="fa-brands fa-whatsapp icon-large"></i>
                        <div class="btn-text-group">
                            <span class="btn-label" data-i18n="heroCtaLabel">Testar na Prática no WhatsApp</span>
                            <span class="btn-subtext" data-i18n="heroCtaSubtext">Demonstração ao vivo no número oficial</span>
                        </div>
                    </a>
                    <a href="#comparativo" class="btn-hero-secondary">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span data-i18n="heroSecondaryCta">Ver economia mensal</span>
                    </a>
                </div>

                <div class="hero-metrics">
                    <div class="metric-item">
                        <span class="metric-value">2 a 4s</span>
                        <span class="metric-desc" data-i18n="metric1">Tempo médio de resposta</span>
                    </div>
                    <div class="metric-divider"></div>
                    <div class="metric-item">
                        <span class="metric-value">1.500</span>
                        <span class="metric-desc" data-i18n="metric2">Atendimentos/mês inclusos</span>
                    </div>
                    <div class="metric-divider"></div>
                    <div class="metric-item">
                        <span class="metric-value">100%</span>
                        <span class="metric-desc" data-i18n="metric3">Simultâneo sem fila</span>
                    </div>
                    <div class="metric-divider"></div>
                    <div class="metric-item">
                        <span class="metric-value text-neon">+30%</span>
                        <span class="metric-desc" data-i18n="metric4">Recuperação com Follow-up</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="visual-card">
                    <div class="visual-card-glow"></div>
                    <img src="icon.webp" alt="Zap24hs Robô Inteligente" class="hero-robot-img" width="380" height="380">
                    
                    <div class="floating-badge badge-top-right">
                        <i class="fa-solid fa-bolt text-neon"></i>
                        <div>
                            <strong data-i18n="badgeSimultaneousTitle">100% Simultâneo</strong>
                            <small data-i18n="badgeSimultaneousSub">Zero fila de espera</small>
                        </div>
                    </div>

                    <div class="floating-badge badge-bottom-left">
                        <i class="fa-solid fa-moon text-neon"></i>
                        <div>
                            <strong data-i18n="badgeNightTitle">Ativo 24/7</strong>
                            <small data-i18n="badgeNightSub">Venda até de madrugada</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enterprise Trust Bar -->
    <div class="trust-bar-section">
        <div class="container">
            <div class="trust-bar">
                <div class="trust-item">
                    <i class="fa-solid fa-server text-neon"></i>
                    <span data-i18n="trustOracle">Infraestrutura <strong>Oracle Cloud Enterprise</strong></span>
                </div>
                <div class="trust-divider"></div>
                <div class="trust-item">
                    <i class="fa-solid fa-shield-halved text-neon"></i>
                    <span data-i18n="trustCloudflare">Segurança & Proteção DDoS <strong>Cloudflare</strong></span>
                </div>
                <div class="trust-divider"></div>
                <div class="trust-item">
                    <i class="fa-solid fa-lock text-neon"></i>
                    <span data-i18n="trustSsl">Criptografia Ponta a Ponta <strong>SSL/TLS</strong></span>
                </div>
                <div class="trust-divider"></div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check text-neon"></i>
                    <span data-i18n="trustUptime">Uptime 99.9% <strong>Estabilidade Comprovada</strong></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Demo Simulation Section -->
    <section class="demo-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag" data-i18n="demoTag">EXPERIÊNCIA AO VIVO</span>
                <h2 class="section-title" data-i18n="demoTitle">Veja como a IA responde em tempo real</h2>
                <p class="section-subtitle" data-i18n="demoSubtitle">
                    Esta é uma prévia interativa. Para conversar de verdade direto no seu celular, clique no botão e mande qualquer pergunta no WhatsApp oficial: <strong>+55 11 911303662</strong>.
                </p>
            </div>

            <div class="chat-mockup-wrapper">
                <div class="chat-phone">
                    <div class="chat-header">
                        <div class="chat-avatar">
                            <img src="icon-192.png" alt="Zap24hs">
                            <span class="online-indicator"></span>
                        </div>
                        <div class="chat-contact-info">
                            <strong>Zap24hs — Assistente Oficial</strong>
                            <small>+55 11 911303662 • <span class="text-neon" data-i18n="chatStatusOnline">Online 24h</span></small>
                        </div>
                        <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="btn-chat-open">
                            <i class="fa-brands fa-whatsapp"></i> <span data-i18n="chatOpenApp">Abrir no Zap</span>
                        </a>
                    </div>

                    <div class="chat-messages" id="chat-messages-container">
                        <div class="chat-bubble incoming">
                            <p data-i18n="chatMsg1">Olá! Sou o assistente do <strong>Zap24hs</strong> 🤖. Posso te explicar como funciona o atendimento 24h, agendamentos com Google Calendar e recuperação de vendas no WhatsApp!</p>
                            <span class="chat-time">Agora</span>
                        </div>
                        <div class="chat-bubble outgoing">
                            <p data-i18n="chatMsg2">Ele consegue agendar reuniões ou consultas na minha agenda?</p>
                            <span class="chat-time">Agora</span>
                        </div>
                        <div class="chat-bubble incoming">
                            <p data-i18n="chatMsg3">Com certeza! A IA consulta horários livres e insere o agendamento direto no seu <strong>Google Agenda</strong> com link para o cliente. E se ele pedir orçamento e sumir, nosso <strong>follow-up inteligente</strong> reativa o contato para você não perder vendas! 🚀</p>
                            <span class="chat-time">Agora</span>
                        </div>
                    </div>

                    <div class="chat-interactive-action">
                        <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="btn-chat-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span data-i18n="chatInteractBtn">Clique aqui para falar comigo no WhatsApp de verdade</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="comparison-section" id="comparativo">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag" data-i18n="compTag">ECONOMIA REAL</span>
                <h2 class="section-title" data-i18n="compTitle">Secretária Humana vs. Zap24hs</h2>
                <p class="section-subtitle" data-i18n="compSubtitle">
                    Faça as contas de quanto custa manter um funcionário apenas para responder mensagens versus colocar uma inteligência artificial dedicada.
                </p>
            </div>

            <div class="comparison-grid">
                <!-- Card Tradicional -->
                <div class="comp-card traditional-card">
                    <div class="comp-card-header">
                        <i class="fa-solid fa-user-clock comp-icon"></i>
                        <h3 data-i18n="compTradTitle">Atendente / Secretária Fixo</h3>
                        <p class="comp-price" data-i18n="compTradPrice">R$ 1.800 a R$ 2.800 / mês</p>
                        <small class="comp-subprice" data-i18n="compTradSub">+ FGTS, 13º, férias, atestados e rescisão</small>
                    </div>
                    <ul class="comp-list">
                        <li class="negative"><i class="fa-solid fa-xmark"></i> <span data-i18n="compTrad1">Atende apenas em horário comercial (8h às 18h).</span></li>
                        <li class="negative"><i class="fa-solid fa-xmark"></i> <span data-i18n="compTrad2">Atende apenas 1 pessoa por vez (outros esperam 10-15 min).</span></li>
                        <li class="negative"><i class="fa-solid fa-xmark"></i> <span data-i18n="compTrad3">Pausa para almoço, faltas e dias de folga.</span></li>
                        <li class="negative"><i class="fa-solid fa-xmark"></i> <span data-i18n="compTrad4">Clientes da noite e do fim de semana compram no concorrente.</span></li>
                        <li class="negative"><i class="fa-solid fa-xmark"></i> <span data-i18n="compTrad5">Esquece de fazer follow-up e perde clientes que somem no vácuo.</span></li>
                    </ul>
                </div>

                <!-- Card Zap24hs -->
                <div class="comp-card zap-card">
                    <div class="badge-featured" data-i18n="compZapBadge">MAIOR RETORNO & ECONOMIA</div>
                    <div class="comp-card-header">
                        <i class="fa-solid fa-robot comp-icon text-neon"></i>
                        <h3>Zap24hs Inteligente</h3>
                        <p class="comp-price text-neon" data-i18n="compZapPrice">R$ 260 / mês fixo</p>
                        <small class="comp-subprice text-neon-sub" data-i18n="compZapSub">Setup único de R$ 700 • Sem encargos trabalhistas</small>
                    </div>
                    <ul class="comp-list">
                        <li class="positive"><i class="fa-solid fa-check text-neon"></i> <span data-i18n="compZap1">Atendimento 24 horas por dia, 7 dias por semana (inclusive feriados).</span></li>
                        <li class="positive"><i class="fa-solid fa-check text-neon"></i> <span data-i18n="compZap2">Atendimento 100% simultâneo: 10 pessoas chamando = 10 respostas na hora.</span></li>
                        <li class="positive"><i class="fa-solid fa-check text-neon"></i> <span data-i18n="compZap3">Nunca falta, não tira férias e não erra preços ou cardápio.</span></li>
                        <li class="positive"><i class="fa-solid fa-check text-neon"></i> <span data-i18n="compZap4">Passa para o humano quando o cliente realmente precisa fechar.</span></li>
                        <li class="positive"><i class="fa-solid fa-check text-neon"></i> <span data-i18n="compZap5">Google Agenda integrado e Follow-up ativo para recuperar vendas.</span></li>
                    </ul>
                    <div class="comp-card-footer">
                        <div class="savings-tag">
                            <i class="fa-solid fa-piggy-bank text-neon"></i>
                            <span data-i18n="compSavings">Economia de mais de R$ 1.500 todo mês</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features / Benefits -->
    <section class="features-section" id="beneficios">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag" data-i18n="featTag">VANTAGENS EXCLUSIVAS</span>
                <h2 class="section-title" data-i18n="featTitle">O que torna o Zap24hs tão poderoso?</h2>
                <p class="section-subtitle" data-i18n="featSubtitle">
                    Não é aquele robô de menu burro que irrita o cliente. É uma inteligência artificial avançada que conversa com naturalidade e educação.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h3 data-i18n="feat1Title">Velocidade Instantânea</h3>
                    <p data-i18n="feat1Desc">Seu cliente recebe uma resposta cordial e precisa entre 2 e 4 segundos. Quem responde rápido fecha a venda primeiro.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-brain"></i></div>
                    <h3 data-i18n="feat2Title">Treinado para o seu Negócio</h3>
                    <p data-i18n="feat2Desc">Nós alimentamos a IA com seus preços, formas de pagamento, endereço, regras, catálogo e políticas. Ele responde com o tom da sua empresa.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-user-shield"></i></div>
                    <h3 data-i18n="feat3Title">Intervenção Humana Inteligente</h3>
                    <p data-i18n="feat3Desc">Quando você ou sua equipe entrarem na conversa, a IA silencia automaticamente para você assumir o controle sem atropelos.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-headset"></i></div>
                    <h3 data-i18n="feat4Title">Detecção de Fotos e Áudios</h3>
                    <p data-i18n="feat4Desc">Se o cliente enviar uma foto de comprovante ou pedir para falar com o gerente, o Zap24hs notifica sua equipe na mesma hora.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-sim-card"></i></div>
                    <h3 data-i18n="feat5Title">Seu Próprio Número</h3>
                    <p data-i18n="feat5Desc">Não precisa trocar de número nem avisar clientes. Ele é conectado via QR Code diretamente no WhatsApp que você já utiliza.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                    <h3 data-i18n="feat6Title">Oracle Cloud & Cloudflare</h3>
                    <p data-i18n="feat6Desc">Hospedado em servidores de alta capacidade na Oracle Cloud Infrastructure com blindagem Cloudflare. Conexão criptografada, proteção DDoS e estabilidade comprovada.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-calendar-check text-neon"></i></div>
                    <h3 data-i18n="feat7Title">Google Agenda Integrado</h3>
                    <p data-i18n="feat7Desc">Seus clientes podem agendar consultas, reuniões ou demonstrações diretamente pelo WhatsApp. A IA sincroniza na sua agenda com link e lembretes anti-falta.</p>
                </div>

                <div class="feature-card">
                    <div class="feat-icon"><i class="fa-solid fa-clock-rotate-left text-neon"></i></div>
                    <h3 data-i18n="feat8Title">Follow-up Ativo Anti-Vácuo</h3>
                    <p data-i18n="feat8Desc">Mais de 70% dos clientes pedem orçamento e somem. O Zap24hs retoma o contato de forma educada e estratégica após algumas horas, recuperando vendas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-section" id="como-funciona">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag" data-i18n="howTag">PASSO A PASSO</span>
                <h2 class="section-title" data-i18n="howTitle">Como ter o Zap24hs na sua empresa</h2>
                <p class="section-subtitle" data-i18n="howSubtitle">
                    Você não precisa entender nada de tecnologia. Nós entregamos tudo funcionando pronto para usar.
                </p>
            </div>

            <div class="steps-container">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3 data-i18n="step1Title">Briefing & Conhecimento</h3>
                    <p data-i18n="step1Desc">Você nos envia a tabela de preços, endereço, horários, catálogo e as dúvidas mais comuns dos seus clientes.</p>
                </div>

                <div class="step-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3 data-i18n="step2Title">Conexão do WhatsApp</h3>
                    <p data-i18n="step2Desc">Você abre o WhatsApp no celular e escaneia o QR Code que geramos. Pronto, o robô já está conectado!</p>
                </div>

                <div class="step-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3 data-i18n="step3Title">Atendimento 24h Ativado</h3>
                    <p data-i18n="step3Desc">Fazemos os testes finais e seu WhatsApp passa a atender dia e noite, convertendo novos clientes sem você esquentar a cabeça.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="precos">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag" data-i18n="priceTag">INVESTIMENTO TRANSPARENTE</span>
                <h2 class="section-title" data-i18n="priceTitle">Preço fixo, em reais e sem pegadinhas</h2>
                <p class="section-subtitle" data-i18n="priceSubtitle">
                    Tudo o que você precisa para automatizar seu WhatsApp profissionalmente.
                </p>
            </div>

            <div class="pricing-card-wrapper">
                <div class="pricing-card">
                    <div class="pricing-badge">
                        <span class="tag-pulse"></span>
                        <span data-i18n="pricingBadge">PLANO COMPLETO • TUDO INCLUSO</span>
                    </div>
                    <div class="pricing-header">
                        <h3>Zap24hs Business</h3>
                        <p class="pricing-desc" data-i18n="pricingDesc">Para pequenas e médias empresas, comércios locais, clínicas e prestadores de serviço.</p>
                        
                        <div class="price-box">
                            <div class="price-row">
                                <span class="price-concept" data-i18n="priceSetupLabel">Setup & Treinamento Inicial:</span>
                                <span class="price-val">R$ 700,00 <small data-i18n="priceSingle">(taxa única)</small></span>
                            </div>
                            <div class="price-row highlight-row">
                                <span class="price-concept" data-i18n="priceMonthlyLabel">Mensalidade Fixa:</span>
                                <span class="price-val text-neon">R$ 260,00 <small data-i18n="priceMonthUnit">/ mês</small></span>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check text-neon"></i> <strong data-i18n="p1">Até 1.500 atendimentos por mês inclusos</strong></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p2">Atendimento simultâneo ilimitado (sem fila de espera)</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p3">Hospedado na Oracle Cloud com blindagem Cloudflare 24h</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p4">Custos de Inteligência Artificial já inclusos</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p5">Treinamento personalizado com seus produtos/serviços</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p6">Pausa automática quando o atendente humano responde</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <strong data-i18n="p10">Agendamento integrado ao Google Agenda para reuniões e consultas</strong></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <strong data-i18n="p11">Follow-up Ativo Anti-Vácuo para recuperar orçamentos parados</strong></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p7">Ajustes mensais de cardápio, tabela de preços e regras</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p8">Suporte técnico direto via WhatsApp</span></li>
                            <li><i class="fa-solid fa-check text-neon"></i> <span data-i18n="p9">Criptografia ponta a ponta e proteção de dados</span></li>
                        </ul>
                    </div>

                    <div class="pricing-footer">
                        <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="btn-pricing-cta" id="pricing-main-cta">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span data-i18n="pricingCta">Quero Contratar o Zap24hs</span>
                        </a>
                        <p class="pricing-guarantee" data-i18n="pricingGuarantee">
                            <i class="fa-solid fa-shield-halved"></i> Ativação rápida em até 24 a 48 horas após o envio dos dados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag" data-i18n="faqTag">DÚVIDAS FREQUENTES</span>
                <h2 class="section-title" data-i18n="faqTitle">Perguntas e Respostas</h2>
            </div>

            <div class="faq-accordion">
                <details class="faq-item">
                    <summary data-i18n="faqQ1">Preciso comprar outro chip ou trocar meu número de WhatsApp?</summary>
                    <p data-i18n="faqA1">Não! O Zap24hs é conectado diretamente no número que a sua empresa já usa hoje. Você só precisa escanear o QR Code uma única vez, como se estivesse abrindo o WhatsApp Web.</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ2">E se o cliente quiser falar com uma pessoa de verdade?</summary>
                    <p data-i18n="faqA2">O sistema é inteligente: se o cliente pedir para falar com o atendente ou se você mandar uma mensagem para ele no WhatsApp, o robô pausa o atendimento imediatamente por 2 horas para você falar em paz.</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ3">O que acontece se 10 pessoas mandarem mensagem ao mesmo tempo?</summary>
                    <p data-i18n="faqA3">Todas as 10 pessoas serão respondidas simultaneamente em 2 a 4 segundos. Não existe fila de espera nem mensagem de "estamos ocupados".</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ4">O que está incluso na mensalidade de R$ 260?</summary>
                    <p data-i18n="faqA4">Está tudo incluso: hospedagem 24 horas na nuvem, o consumo da inteligência artificial, suporte técnico caso precise reconectar o WhatsApp e pequenos ajustes periódicos nas suas promoções e preços.</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ5">E se eu ultrapassar 1.500 atendimentos em um mês?</summary>
                    <p data-i18n="faqA5">Para a imensa maioria dos negócios locais, 1.500 atendimentos é mais do que suficiente. Caso sua empresa seja muito grande e ultrapasse com frequência, nós avisamos com antecedência e combinamos um pacote proporcional sem cortar o seu atendimento.</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ6">Onde o sistema fica hospedado e meus dados estão seguros?</summary>
                    <p data-i18n="faqA6">Sim, com padrão corporativo! O Zap24hs roda em servidores dedicados na <strong>Oracle Cloud Infrastructure</strong>, com todo o tráfego blindado e monitorado pela <strong>Cloudflare</strong> (proteção contra ataques DDoS, firewall inteligente e criptografia ponta a ponta com certificados SSL/TLS modernos). As informações da sua empresa contam com segurança de nível bancário.</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ7">Como funciona o agendamento integrado ao Google Agenda?</summary>
                    <p data-i18n="faqA7">O Zap24hs consulta os horários livres na sua agenda em tempo real durante a conversa. Quando o cliente escolhe o dia e horário, a IA insere o compromisso no seu Google Agenda e envia um link com 1 toque para o cliente salvar também no celular dele.</p>
                </details>

                <details class="faq-item">
                    <summary data-i18n="faqQ8">O que é o Follow-up Ativo Anti-Vácuo e como ele me faz vender mais?</summary>
                    <p data-i18n="faqA8">Mais de 70% das pessoas no WhatsApp pedem um preço ou tiram dúvidas e somem. O Zap24hs identifica quando a conversa esfriou e, após algumas horas de forma educada e estratégica (sempre em horário comercial), envia uma mensagem personalizada para reativar o lead. Isso costuma recuperar entre 15% e 30% das vendas que seriam dadas como perdidas.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta-section">
        <div class="container text-center">
            <h2 data-i18n="finalCtaTitle">Pronto para ter sua secretária virtual atendendo hoje mesmo?</h2>
            <p data-i18n="finalCtaSubtitle">Fale agora com o assistente inteligente no WhatsApp oficial ou solicite a implantação na sua empresa.</p>
            <div class="final-cta-btns">
                <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="btn-hero-primary" id="final-main-cta">
                    <i class="fa-brands fa-whatsapp icon-large"></i>
                    <div class="btn-text-group">
                        <span class="btn-label" data-i18n="finalCtaBtn">Chamar no WhatsApp (+55 11 911303662)</span>
                        <span class="btn-subtext" data-i18n="finalCtaSub">Atendimento imediato 24h</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <div class="brand">
                        <img src="icon-192.png" alt="Zap24hs" width="36" height="36">
                        <span class="brand-name">Zap<span class="text-neon">24hs</span></span>
                    </div>
                    <p data-i18n="footerBio">Uma solução de inteligência artificial aplicada desenvolvida pelo ecossistema 4u-Labs por Fabiano Braga.</p>
                </div>

                <div class="footer-col">
                    <h4 data-i18n="footerColProduct">Produto</h4>
                    <a href="#beneficios" data-i18n="navBenefits">Benefícios</a>
                    <a href="#comparativo" data-i18n="navComparison">Comparativo</a>
                    <a href="#como-funciona" data-i18n="navHowItWorks">Como Funciona</a>
                    <a href="#precos" data-i18n="navPricing">Preços</a>
                    <a href="agendamentos.php"><i class="fa-solid fa-calendar-check text-neon"></i> Agendamentos</a>
                </div>

                <div class="footer-col">
                    <h4 data-i18n="footerColInstitutional">Institucional</h4>
                    <a href="https://4u.ia.br/" target="_blank" rel="noopener noreferrer">Portal 4U.IA.BR</a>
                    <a href="https://4u.ia.br/loja/" target="_blank" rel="noopener noreferrer" data-i18n="footerStore">Loja de Apps</a>
                    <a href="https://4u.ia.br/sobre.html" target="_blank" rel="noopener noreferrer" data-i18n="footerAbout">Sobre 4U</a>
                    <a href="https://4u.ia.br/politica.html" target="_blank" rel="noopener noreferrer" data-i18n="footerPrivacy">Privacidade</a>
                    <a href="https://4u.ia.br/termos.html" target="_blank" rel="noopener noreferrer" data-i18n="footerTerms">Termos</a>
                </div>

                <div class="footer-col">
                    <h4 data-i18n="footerColContact">Contato Oficial</h4>
                    <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp"></i> +55 11 911303662</a>
                    <a href="mailto:contato@4u.ia.br"><i class="fa-solid fa-envelope"></i> contato@4u.ia.br</a>
                    <a href="https://www.paypal.com/ncp/payment/L7YRCS984T33N" target="_blank" rel="noopener noreferrer" class="link-support" data-i18n="footerSupport">♡ Apoiar o Projeto</a>
                </div>
            </div>

            <div class="footer-bottom">
                <span>© 2026 Fabiano Braga · 4u-Labs. Todos os direitos reservados.</span>
                <div class="lang-switch-footer">
                    <button type="button" class="lang-btn active" data-set-lang="pt">Português</button>
                    <span>•</span>
                    <button type="button" class="lang-btn" data-set-lang="en">English</button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal 4u-Labs (14 Links Oficiais Aprovados) -->
    <dialog id="community-dialog">
        <div class="dialog-heading">
            <h2 data-i18n="communityTitle">4u-Labs — Aplicativos, suporte e comunidade</h2>
            <button class="icon-button" id="dialog-close" aria-label="Fechar">✕</button>
        </div>
        <div class="dialog-body">
            <p class="dialog-desc" data-i18n="communitySubtitle">Conheça todos os portais, documentações e redes oficiais do ecossistema 4u-Labs:</p>
            <div class="community-links">
                <a href="https://4u.ia.br/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-globe"></i> Portal 4U</a>
                <a href="https://4u.ia.br/loja/index.php" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-store"></i> <span data-i18n="appStore">Loja de Apps</span></a>
                <a href="https://4u.ia.br/suporte.html" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-circle-question"></i> <span data-i18n="helpCenter">Central de Ajuda</span></a>
                <a href="https://4u.ia.br/sobre.html" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-info-circle"></i> <span data-i18n="about">Sobre 4U</span></a>
                <a href="https://4u.ia.br/termos.html" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-file-contract"></i> <span data-i18n="terms">Termos</span></a>
                <a href="https://4u.ia.br/politica.html" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-user-shield"></i> <span data-i18n="privacy">Privacidade</span></a>
                <a href="https://github.com/4u-Labs" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i> GitHub</a>
                <a href="https://4u-labs.github.io/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-rss"></i> Blog Dev</a>
                <a href="https://alternativeto.net/user/4u-ia-br/added/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-star"></i> AlternativeTo</a>
                <a href="https://www.youtube.com/@fbr4g4" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i> YouTube</a>
                <a href="https://www.instagram.com/fbr4g4/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href="https://www.facebook.com/fbr4g4/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://x.com/fbr4g4" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i> X / Twitter</a>
                <a href="https://www.linkedin.com/in/fbr4g4/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
            </div>
            <a class="button-paypal" href="https://www.paypal.com/ncp/payment/L7YRCS984T33N" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-paypal"></i> <span data-i18n="support">Apoiar o Projeto via PayPal</span>
            </a>
            <p class="dialog-foot">© 2026 Fabiano Braga · 4u-Labs</p>
        </div>
    </dialog>

    <!-- Floating Sticky WhatsApp Button (High Conversion) -->
    <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noopener noreferrer" class="whatsapp-sticky-btn" id="sticky-wa-btn" aria-label="Falar com Zap24hs no WhatsApp">
        <div class="sticky-icon-wrapper">
            <i class="fa-brands fa-whatsapp"></i>
            <span class="sticky-badge">1</span>
        </div>
        <div class="sticky-label">
            <strong data-i18n="stickyWaLabel">Falar com a IA</strong>
            <small data-i18n="stickyWaSub">Online agora 24h</small>
        </div>
    </a>

    <!-- Custom JS -->
    <script src="app.js?v=<?php echo $assetVersion; ?>"></script>
</body>
</html>

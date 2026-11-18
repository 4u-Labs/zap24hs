// Zap24hs — Client-Side Controller & i18n Dictionary
(function () {
    'use strict';

    const WHATSAPP_NUMBER = "5511911303662";
    const WA_LINK_PT = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent("Olá! Gostaria de testar o Zap24hs na prática e tirar umas dúvidas.")}`;
    const WA_LINK_EN = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent("Hello! I would like to test Zap24hs live and learn more.")}`;

    const translations = {
        pt: {
            navBenefits: "Benefícios",
            navComparison: "Comparativo",
            navHowItWorks: "Como Funciona",
            navPricing: "Preços",
            navFaq: "FAQ",
            navCta: "Testar ao Vivo",
            heroTag: "● SECRETÁRIA COM IA • GOOGLE AGENDA & FOLLOW-UP",
            heroTitle: 'Sua empresa respondendo <span class="text-gradient">no mesmo segundo</span>, 24 horas por dia.',
            heroSubtitle: "Acabe com o cliente esperando no vácuo e indo para o concorrente. Atenda dezenas de pessoas simultaneamente com respostas humanas, treinadas com as regras do seu negócio, por uma fração do custo de um funcionário.",
            heroCtaLabel: "Testar na Prática no WhatsApp",
            heroCtaSubtext: "Demonstração ao vivo no número oficial",
            stickyWaLabel: "Falar com a IA",
            stickyWaSub: "Online agora 24h",
            heroSecondaryCta: "Ver economia mensal",
            metric1: "Tempo médio de resposta",
            metric2: "Atendimentos/mês inclusos",
            metric3: "Simultâneo sem fila",
            metric4: "Recuperação com Follow-up",
            badgeSimultaneousTitle: "100% Simultâneo",
            badgeSimultaneousSub: "Zero fila de espera",
            badgeNightTitle: "Ativo 24/7",
            badgeNightSub: "Venda até de madrugada",
            trustOracle: 'Infraestrutura <strong>Oracle Cloud Enterprise</strong>',
            trustCloudflare: 'Segurança & Proteção DDoS <strong>Cloudflare</strong>',
            trustSsl: 'Criptografia Ponta a Ponta <strong>SSL/TLS</strong>',
            trustUptime: 'Uptime 99.9% <strong>Estabilidade Comprovada</strong>',
            demoTag: "EXPERIÊNCIA AO VIVO",
            demoTitle: "Veja como a IA responde em tempo real",
            demoSubtitle: "Esta é uma prévia interativa. Para conversar de verdade direto no seu celular, clique no botão e mande qualquer pergunta no WhatsApp oficial: <strong>+55 11 911303662</strong>.",
            chatStatusOnline: "Online 24h",
            chatOpenApp: "Abrir no Zap",
            chatMsg1: "Olá! Sou o assistente do <strong>Zap24hs</strong> 🤖. Posso te explicar como funciona o atendimento 24h, agendamentos com Google Calendar e recuperação de vendas no WhatsApp!",
            chatMsg2: "Ele consegue agendar reuniões ou consultas na minha agenda?",
            chatMsg3: "Com certeza! A IA consulta horários livres e insere o agendamento direto no seu <strong>Google Agenda</strong> com link para o cliente. E se ele pedir orçamento e sumir, nosso <strong>follow-up inteligente</strong> reativa o contato para você não perder vendas! 🚀",
            chatInteractBtn: "Clique aqui para falar comigo no WhatsApp de verdade",
            compTag: "ECONOMIA REAL",
            compTitle: "Secretária Humana vs. Zap24hs",
            compSubtitle: "Faça as contas de quanto custa manter um funcionário apenas para responder mensagens versus colocar uma inteligência artificial dedicada.",
            compTradTitle: "Atendente / Secretária Fixo",
            compTradPrice: "R$ 1.800 a R$ 2.800 / mês",
            compTradSub: "+ FGTS, 13º, férias, atestados e rescisão",
            compTrad1: "Atende apenas em horário comercial (8h às 18h).",
            compTrad2: "Atende apenas 1 pessoa por vez (outros esperam 10-15 min).",
            compTrad3: "Pausa para almoço, faltas e dias de folga.",
            compTrad4: "Clientes da noite e do fim de semana compram no concorrente.",
            compTrad5: "Esquece de fazer follow-up e perde clientes que somem no vácuo.",
            compZapBadge: "MAIOR RETORNO & ECONOMIA",
            compZapPrice: "R$ 260 / mês fixo",
            compZapSub: "Setup único de R$ 700 • Sem encargos trabalhistas",
            compZap1: "Atendimento 24 horas por dia, 7 dias por semana (inclusive feriados).",
            compZap2: "Atendimento 100% simultâneo: 10 pessoas chamando = 10 respostas na hora.",
            compZap3: "Nunca falta, não tira férias e não erra preços ou cardápio.",
            compZap4: "Passa para o humano quando o cliente realmente precisa fechar.",
            compZap5: "Google Agenda integrado e Follow-up ativo para recuperar vendas.",
            compSavings: "Economia de mais de R$ 1.500 todo mês",
            featTag: "VANTAGENS EXCLUSIVAS",
            featTitle: "O que torna o Zap24hs tão poderoso?",
            featSubtitle: "Não é aquele robô de menu burro que irrita o cliente. É uma inteligência artificial avançada que conversa com naturalidade e educação.",
            feat1Title: "Velocidade Instantânea",
            feat1Desc: "Seu cliente recebe uma resposta cordial e precisa entre 2 e 4 segundos. Quem responde rápido fecha a venda primeiro.",
            feat2Title: "Treinado para o seu Negócio",
            feat2Desc: "Nós alimentamos a IA com seus preços, formas de pagamento, endereço, regras, catálogo e políticas. Ele responde com o tom da sua empresa.",
            feat3Title: "Intervenção Humana Inteligente",
            feat3Desc: "Quando você ou sua equipe entrarem na conversa, a IA silencia automaticamente para você assumir o controle sem atropelos.",
            feat4Title: "Detecção de Fotos e Áudios",
            feat4Desc: "Se o cliente enviar uma foto de comprovante ou pedir para falar com o gerente, o Zap24hs notifica sua equipe na mesma hora.",
            feat5Title: "Seu Próprio Número",
            feat5Desc: "Não precisa trocar de número nem avisar clientes. Ele é conectado via QR Code diretamente no WhatsApp que você já utiliza.",
            feat6Title: "Oracle Cloud & Cloudflare",
            feat6Desc: "Hospedado em servidores de alta capacidade na Oracle Cloud Infrastructure com blindagem Cloudflare. Conexão criptografada, proteção DDoS e estabilidade comprovada.",
            feat7Title: "Google Agenda Integrado",
            feat7Desc: "Seus clientes podem agendar consultas, reuniões ou demonstrações diretamente pelo WhatsApp. A IA sincroniza na sua agenda com link e lembretes anti-falta.",
            feat8Title: "Follow-up Ativo Anti-Vácuo",
            feat8Desc: "Mais de 70% dos clientes pedem orçamento e somem. O Zap24hs retoma o contato de forma educada e estratégica após algumas horas, recuperando vendas.",
            howTag: "PASSO A PASSO",
            howTitle: "Como ter o Zap24hs na sua empresa",
            howSubtitle: "Você não precisa entender nada de tecnologia. Nós entregamos tudo funcionando pronto para usar.",
            step1Title: "Briefing & Conhecimento",
            step1Desc: "Você nos envia a tabela de preços, endereço, horários, catálogo e as dúvidas mais comuns dos seus clientes.",
            step2Title: "Conexão do WhatsApp",
            step2Desc: "Você abre o WhatsApp no celular e escaneia o QR Code que geramos. Pronto, o robô já está conectado!",
            step3Title: "Atendimento 24h Ativado",
            step3Desc: "Fazemos os testes finais e seu WhatsApp passa a atender dia e noite, convertendo novos clientes sem você esquentar a cabeça.",
            priceTag: "INVESTIMENTO TRANSPARENTE",
            priceTitle: "Preço fixo, em reais e sem pegadinhas",
            priceSubtitle: "Tudo o que você precisa para automatizar seu WhatsApp profissionalmente.",
            pricingBadge: "PLANO COMPLETO • TUDO INCLUSO",
            pricingDesc: "Para pequenas e médias empresas, comércios locais, clínicas e prestadores de serviço.",
            priceSetupLabel: "Setup & Treinamento Inicial:",
            priceSingle: "(taxa única)",
            priceMonthlyLabel: "Mensalidade Fixa:",
            priceMonthUnit: "/ mês",
            p1: "Até 1.500 atendimentos por mês inclusos",
            p2: "Atendimento simultâneo ilimitado (sem fila de espera)",
            p3: "Hospedado na Oracle Cloud com blindagem Cloudflare 24h",
            p4: "Custos de Inteligência Artificial já inclusos",
            p5: "Treinamento personalizado com seus produtos/serviços",
            p6: "Pausa automática quando o atendente humano responde",
            p7: "Ajustes mensais de cardápio, tabela de preços e regras",
            p8: "Suporte técnico direto via WhatsApp",
            p9: "Criptografia ponta a ponta e proteção de dados",
            p10: "Agendamento integrado ao Google Agenda para reuniões e consultas",
            p11: "Follow-up Ativo Anti-Vácuo para recuperar orçamentos parados",
            pricingCta: "Quero Contratar o Zap24hs",
            pricingGuarantee: '<i class="fa-solid fa-shield-halved"></i> Ativação rápida em até 24 a 48 horas após o envio dos dados.',
            faqTag: "DÚVIDAS FREQUENTES",
            faqTitle: "Perguntas e Respostas",
            faqQ1: "Preciso comprar outro chip ou trocar meu número de WhatsApp?",
            faqA1: "Não! O Zap24hs é conectado diretamente no número que a sua empresa já usa hoje. Você só precisa escanear o QR Code uma única vez, como se estivesse abrindo o WhatsApp Web.",
            faqQ2: "E se o cliente quiser falar com uma pessoa de verdade?",
            faqA2: "O sistema é inteligente: se o cliente pedir para falar com o atendente ou se você mandar uma mensagem para ele no WhatsApp, o robô pausa o atendimento imediatamente por 2 horas para você falar em paz.",
            faqQ3: "O que acontece se 10 pessoas mandarem mensagem ao mesmo tempo?",
            faqA3: "Todas as 10 pessoas serão respondidas simultaneamente em 2 a 4 segundos. Não existe fila de espera nem mensagem de 'estamos ocupados'.",
            faqQ4: "O que está incluso na mensalidade de R$ 260?",
            faqA4: "Está tudo incluso: hospedagem 24 horas na nuvem, o consumo da inteligência artificial, suporte técnico caso precise reconectar o WhatsApp e pequenos ajustes periódicos nas suas promoções e preços.",
            faqQ5: "E se eu ultrapassar 1.500 atendimentos em um mês?",
            faqA5: "Para a imensa maioria dos negócios locais, 1.500 atendimentos é mais do que suficiente. Caso sua empresa seja muito grande e ultrapasse com frequência, nós avisamos com antecedência e combinamos um pacote proporcional sem cortar o seu atendimento.",
            faqQ6: "Onde o sistema fica hospedado e meus dados estão seguros?",
            faqA6: "Sim, com padrão corporativo! O Zap24hs roda em servidores dedicados na <strong>Oracle Cloud Infrastructure</strong>, com todo o tráfego blindado e monitorado pela <strong>Cloudflare</strong> (proteção contra ataques DDoS, firewall inteligente e criptografia ponta a ponta com certificados SSL/TLS modernos). As informações da sua empresa contam com segurança de nível bancário.",
            faqQ7: "Como funciona o agendamento integrado ao Google Agenda?",
            faqA7: "O Zap24hs consulta os horários livres na sua agenda em tempo real durante a conversa. Quando o cliente escolhe o dia e horário, a IA insere o compromisso no seu Google Agenda e envia um link com 1 toque para o cliente salvar também no celular dele.",
            faqQ8: "O que é o Follow-up Ativo Anti-Vácuo e como ele me faz vender mais?",
            faqA8: "Mais de 70% das pessoas no WhatsApp pedem um preço ou tiram dúvidas e somem. O Zap24hs identifica quando a conversa esfriou e, após algumas horas de forma educada e estratégica (sempre em horário comercial), envia uma mensagem personalizada para reativar o lead. Isso costuma recuperar entre 15% e 30% das vendas que seriam dadas como perdidas.",
            finalCtaTitle: "Pronto para ter sua secretária virtual atendendo hoje mesmo?",
            finalCtaSubtitle: "Fale agora com o assistente inteligente no WhatsApp oficial ou solicite a implantação na sua empresa.",
            finalCtaBtn: "Chamar no WhatsApp (+55 11 911303662)",
            finalCtaSub: "Atendimento imediato 24h",
            footerBio: "Uma solução de inteligência artificial aplicada desenvolvida pelo ecossistema 4u-Labs por Fabiano Braga.",
            footerColProduct: "Produto",
            footerColInstitutional: "Institucional",
            footerStore: "Loja de Apps",
            footerAbout: "Sobre 4U",
            footerPrivacy: "Privacidade",
            footerTerms: "Termos",
            footerColContact: "Contato Oficial",
            footerSupport: "♡ Apoiar o Projeto",
            communityTitle: "4u-Labs — Aplicativos, suporte e comunidade",
            communitySubtitle: "Conheça todos os portais, documentações e redes oficiais do ecossistema 4u-Labs:",
            appStore: "Loja de Apps",
            helpCenter: "Central de Ajuda",
            about: "Sobre 4U",
            terms: "Termos",
            privacy: "Privacidade",
            support: "Apoiar o Projeto via PayPal"
        },
        en: {
            navBenefits: "Benefits",
            navComparison: "Comparison",
            navHowItWorks: "How It Works",
            navPricing: "Pricing",
            navFaq: "FAQ",
            navCta: "Test Live",
            heroTag: "● 24/7 AI SECRETARY • GOOGLE CALENDAR & FOLLOW-UP",
            heroTitle: 'Your business responding <span class="text-gradient">in the exact same second</span>, 24 hours a day.',
            heroSubtitle: "Stop losing leads to unanswered messages. Serve dozens of customers at once with natural, human-like answers trained on your business rules for a fraction of a salary.",
            heroCtaLabel: "Test Live on WhatsApp",
            heroCtaSubtext: "Live demonstration on our official number",
            stickyWaLabel: "Chat with AI",
            stickyWaSub: "Online 24/7",
            heroSecondaryCta: "See monthly savings",
            metric1: "Average response time",
            metric2: "Included monthly chats",
            metric3: "100% Simultaneous",
            metric4: "Follow-up Recovery",
            badgeSimultaneousTitle: "100% Simultaneous",
            badgeSimultaneousSub: "Zero waiting queue",
            badgeNightTitle: "24/7 Always Active",
            badgeNightSub: "Convert leads even at night",
            trustOracle: 'Enterprise <strong>Oracle Cloud Infrastructure</strong>',
            trustCloudflare: 'Security & DDoS Mitigation by <strong>Cloudflare</strong>',
            trustSsl: 'End-to-End Encryption with <strong>SSL/TLS</strong>',
            trustUptime: '99.9% Uptime <strong>Battle-Tested Stability</strong>',
            demoTag: "LIVE EXPERIENCE",
            demoTitle: "See how the AI answers in real-time",
            demoSubtitle: "This is an interactive preview. To test on your own mobile, click the button and send any question to our official WhatsApp: <strong>+55 11 911303662</strong>.",
            chatStatusOnline: "Online 24/7",
            chatOpenApp: "Open in WhatsApp",
            chatMsg1: "Hello! I am the <strong>Zap24hs</strong> assistant 🤖. I can show you how 24/7 customer service, Google Calendar booking, and lead recovery work for your business!",
            chatMsg2: "Can it schedule appointments and meetings directly on my calendar?",
            chatMsg3: "Absolutely! The AI checks your real-time availability and books appointments directly into your <strong>Google Calendar</strong> with one-tap invites. And if a customer goes silent after asking for pricing, our <strong>anti-ghosting follow-up</strong> re-engages them automatically! 🚀",
            chatInteractBtn: "Click here to chat with me on real WhatsApp",
            compTag: "REAL SAVINGS",
            compTitle: "Human Secretary vs. Zap24hs",
            compSubtitle: "Calculate the real cost of hiring dedicated staff just to reply to chat messages versus having a dedicated AI receptionist.",
            compTradTitle: "Full-Time Human Receptionist",
            compTradPrice: "R$ 1,800 to R$ 2,800 / month",
            compTradSub: "+ Labor taxes, vacation, 13th salary & sick leave",
            compTrad1: "Only answers during business hours (8am - 6pm).",
            compTrad2: "Can only talk to 1 customer at a time (others wait 10-15m).",
            compTrad3: "Lunch breaks, days off and unexpected absences.",
            compTrad4: "Night and weekend customers buy from your competitors.",
            compTrad5: "Forgets to follow up and loses leads that went silent.",
            compZapBadge: "HIGHEST ROI & SAVINGS",
            compZapPrice: "R$ 260 / month flat",
            compZapSub: "One-time R$ 700 setup • Zero labor liabilities",
            compZap1: "24 hours a day, 7 days a week (including holidays).",
            compZap2: "100% simultaneous: 10 people calling = 10 instant replies.",
            compZap3: "Never misses work, never takes leave, never forgets prices.",
            compZap4: "Seamlessly hands off to human staff when it's time to close.",
            compZap5: "Google Calendar sync & automated follow-up to recover lost leads.",
            compSavings: "Save over R$ 1,500 every single month",
            featTag: "EXCLUSIVE ADVANTAGES",
            featTitle: "What makes Zap24hs so powerful?",
            featSubtitle: "No rigid robotic menus. It's an advanced AI conversational engine that talks with politeness, context and accuracy.",
            feat1Title: "Instantaneous Speed",
            feat1Desc: "Your customer receives a precise, cordial response within 2 to 4 seconds. Fast responders close deals first.",
            feat2Title: "Trained on Your Business",
            feat2Desc: "We train the AI with your price list, payment methods, address, guidelines, catalog and policies.",
            feat3Title: "Smart Human Takeover",
            feat3Desc: "Whenever you or your team send a message to a customer, the AI pauses automatically for 2 hours.",
            feat4Title: "Audio & Photo Alerts",
            feat4Desc: "If a customer sends a payment receipt screenshot or asks for a manager, Zap24hs immediately alerts your team.",
            feat5Title: "Keep Your Existing Number",
            feat5Desc: "No need to buy a new SIM card. Scan our QR Code directly from the WhatsApp number you already use.",
            feat6Title: "Oracle Cloud & Cloudflare",
            feat6Desc: "Hosted on high-capacity Oracle Cloud Infrastructure with Cloudflare edge defense. End-to-end encryption, multi-layered DDoS mitigation and zero downtime.",
            feat7Title: "Google Calendar Integrated",
            feat7Desc: "Clients can schedule appointments, demos and meetings directly through chat. AI blocks the slot in Google Calendar with one-tap invites and anti-no-show reminders.",
            feat8Title: "Active Anti-Ghosting Follow-up",
            feat8Desc: "Over 70% of leads ask for pricing and vanish. Zap24hs re-engages them automatically with polite, strategic timing, recovering lost sales.",
            howTag: "STEP BY STEP",
            howTitle: "How to deploy Zap24hs in your company",
            howSubtitle: "No technical knowledge required. We deliver everything turnkey ready to work.",
            step1Title: "Briefing & Knowledge",
            step1Desc: "Send us your price list, business hours, catalog and frequent customer questions.",
            step2Title: "WhatsApp Connection",
            step2Desc: "Open WhatsApp on your phone and scan the QR Code we generate. Done, your bot is linked!",
            step3Title: "24/7 Auto-Pilot Activated",
            step3Desc: "We run final verification tests and your WhatsApp handles sales day and night effortlessly.",
            priceTag: "TRANSPARENT PRICING",
            priceTitle: "Flat pricing, in BRL and zero hidden fees",
            priceSubtitle: "Everything you need to automate your WhatsApp professionally.",
            pricingBadge: "ALL-INCLUSIVE PLAN",
            pricingDesc: "For small & medium businesses, local shops, clinics and service providers.",
            priceSetupLabel: "One-Time Setup & Training:",
            priceSingle: "(single payment)",
            priceMonthlyLabel: "Flat Monthly Fee:",
            priceMonthUnit: "/ month",
            p1: "Up to 1,500 monthly conversations included",
            p2: "Unlimited simultaneous chats (zero waiting queue)",
            p3: "Hosted on Oracle Cloud with 24/7 Cloudflare security",
            p4: "AI computing costs fully included",
            p5: "Custom training with your catalog and guidelines",
            p6: "Automatic pause when human attendant replies",
            p7: "Monthly catalog and pricing maintenance included",
            p8: "Direct priority support via WhatsApp",
            p9: "End-to-end encryption and enterprise data privacy",
            p10: "Google Calendar integration for direct appointment & meeting booking",
            p11: "Smart Anti-Ghosting Follow-up to reactivate lost sales quotes",
            pricingCta: "Get Zap24hs Now",
            pricingGuarantee: '<i class="fa-solid fa-shield-halved"></i> Fast setup in 24 to 48 hours after info submission.',
            faqTag: "FREQUENT QUESTIONS",
            faqTitle: "Questions & Answers",
            faqQ1: "Do I need to buy a new SIM card or change my phone number?",
            faqA1: "No! Zap24hs connects directly to the WhatsApp number your business already uses. You simply scan a QR code once.",
            faqQ2: "What if a customer wants to talk to a real person?",
            faqA2: "The system is smart: if the client requests human assistance or if you reply directly on WhatsApp, the bot pauses for 2 hours.",
            faqQ3: "What happens if 10 customers text at the exact same time?",
            faqA3: "All 10 customers receive instant, personalized answers in 2 to 4 seconds. There is no queue or busy signal.",
            faqQ4: "What is included in the R$ 260 monthly fee?",
            faqA4: "Everything is included: 24/7 cloud hosting, AI compute tokens, ongoing technical support and periodic menu/pricing updates.",
            faqQ5: "What if I exceed 1,500 conversations in a month?",
            faqA5: "For local commerce, 1,500 chats is usually more than enough. If your volume grows, we notify you in advance with proportional plans.",
            faqQ6: "Where is the system hosted and is my business data secure?",
            faqA6: "Yes, with enterprise standards! Zap24hs runs on dedicated <strong>Oracle Cloud Infrastructure</strong> instances, with network traffic shielded by <strong>Cloudflare</strong> (DDoS mitigation, intelligent firewall and modern SSL/TLS encryption). Your business data and conversations have bank-grade protection.",
            faqQ7: "How does Google Calendar scheduling work?",
            faqA7: "Zap24hs reads your available slots in real time during the chat. When the customer confirms a date and time, the AI adds the event directly to your Google Calendar and sends a one-tap link for the customer to save it to their phone too.",
            faqQ8: "What is the Anti-Ghosting Follow-up and how does it drive sales?",
            faqA8: "Over 70% of WhatsApp leads ask for a price and disappear. Zap24hs detects when a conversation has stalled and sends a polite, contextual follow-up message after a few hours (strictly within business hours) to rekindle the opportunity. This typically recovers 15% to 30% of otherwise lost revenue.",
            finalCtaTitle: "Ready to put your 24/7 virtual secretary to work today?",
            finalCtaSubtitle: "Talk to our live AI assistant on official WhatsApp or request implementation for your business.",
            finalCtaBtn: "Chat on WhatsApp (+55 11 911303662)",
            finalCtaSub: "Instant 24/7 response",
            footerBio: "An applied artificial intelligence solution developed by the 4u-Labs ecosystem by Fabiano Braga.",
            footerColProduct: "Product",
            footerColInstitutional: "Institutional",
            footerStore: "App Store",
            footerAbout: "About 4U",
            footerPrivacy: "Privacy",
            footerTerms: "Terms",
            footerColContact: "Official Contact",
            footerSupport: "♡ Support the Project",
            communityTitle: "4u-Labs — Apps, support and community",
            communitySubtitle: "Explore all official portals, documentations and socials from 4u-Labs:",
            appStore: "App Store",
            helpCenter: "Help Center",
            about: "About 4U",
            terms: "Terms",
            privacy: "Privacy",
            support: "Support Project via PayPal"
        }
    };

    function setLanguage(lang) {
        if (!translations[lang]) lang = 'pt';
        document.body.setAttribute('data-lang', lang);
        localStorage.setItem('zap24hs_lang', lang);

        // Update buttons
        document.querySelectorAll('[data-set-lang]').forEach(btn => {
            if (btn.getAttribute('data-set-lang') === lang) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Translate text
        const dict = translations[lang];
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (dict[key]) {
                el.innerHTML = dict[key];
            }
        });

        // Update WhatsApp Links
        const targetLink = (lang === 'en') ? WA_LINK_EN : WA_LINK_PT;
        const ctaIds = ['nav-cta-link', 'hero-main-cta', 'pricing-main-cta', 'final-main-cta', 'sticky-wa-btn'];
        ctaIds.forEach(id => {
            const el = document.getElementById(id);
            if (el) el.setAttribute('href', targetLink);
        });
        document.querySelectorAll('.btn-chat-whatsapp, .btn-chat-open').forEach(el => {
            el.setAttribute('href', targetLink);
        });
    }

    // Community Dialog
    function setupCommunityDialog() {
        const dialog = document.getElementById('community-dialog');
        const openBtn = document.getElementById('btn-community');
        const closeBtn = document.getElementById('dialog-close');

        if (dialog && openBtn) {
            openBtn.addEventListener('click', () => {
                dialog.showModal();
            });
        }

        if (dialog && closeBtn) {
            closeBtn.addEventListener('click', () => {
                dialog.close();
            });
        }

        if (dialog) {
            dialog.addEventListener('click', (e) => {
                const rect = dialog.getBoundingClientRect();
                const inDialog = (
                    rect.top <= e.clientY && e.clientY <= rect.top + rect.height &&
                    rect.left <= e.clientX && e.clientX <= rect.left + rect.width
                );
                if (!inDialog) {
                    dialog.close();
                }
            });
        }
    }

    // Initialization
    document.addEventListener('DOMContentLoaded', () => {
        setupCommunityDialog();

        // Language Switchers
        document.querySelectorAll('[data-set-lang]').forEach(btn => {
            btn.addEventListener('click', () => {
                const lang = btn.getAttribute('data-set-lang');
                setLanguage(lang);
            });
        });

        // Detect initial language
        const savedLang = localStorage.getItem('zap24hs_lang');
        const browserLang = (navigator.language || '').toLowerCase().startsWith('pt') ? 'pt' : 'en';
        setLanguage(savedLang || browserLang || 'pt');
    });

})();

# WordPress Security Hardening Templates

<div align="center">
  <p>Elite B2B Security Configurations for WordPress Infrastructure.</p>
  <p>
    <a href="#-english">🇺🇸 English</a> | 
    <a href="#-português">🇧🇷 Português</a>
  </p>
</div>

---

## 🇺🇸 English

### High-Performance WordPress Security
This repository contains the official **TAVARDT Agency** hardening templates for corporate WordPress environments. These snippets are designed to mitigate common attack vectors (DDoS, Brute Force, XSS) and optimize server performance.

### Contents
- **`.htaccess-secure`**: Apache rules to block `xmlrpc.php`, hide directories, and prevent script injection.
- **`wp-config-secure.php`**: Core constants to force SSL, disable dashboard file editing, and offload cron jobs.
- **`functions-security.php`**: PHP filters to hide footprinting data (WP version) and sanitize login errors.

### Implementation Guide
1. **Never copy-paste blindly.** Review the rules to ensure they do not conflict with your specific hosting environment (e.g., some plugins rely on the REST API for guest users).
2. For maximum effectiveness, the PHP functions should be placed in a Must-Use plugin (`/wp-content/mu-plugins/security.php`) rather than a theme's `functions.php`.

---

## 🇧🇷 Português

### Segurança e Alta Performance para WordPress
Este repositório contém os templates oficiais de "Hardening" (blindagem) da **TAVARDT** para ambientes corporativos em WordPress. Estes códigos foram projetados para mitigar vetores de ataque comuns (DDoS, Força Bruta, XSS) e otimizar a performance do servidor.

### Conteúdo
- **`.htaccess-secure`**: Regras de Apache para bloquear `xmlrpc.php`, ocultar diretórios e prevenir injeção de scripts.
- **`wp-config-secure.php`**: Constantes vitais para forçar SSL, proibir edição de arquivos no painel e desabilitar o Cron nativo.
- **`functions-security.php`**: Filtros PHP para ocultar dados de rastreamento (versão do WP) e higienizar erros de login.

### Guia de Implementação
1. **Nunca copie e cole às cegas.** Revise as regras para garantir que não conflitam com sua infraestrutura de hospedagem atual (ex: alguns plugins dependem da API REST para visitantes).
2. Para máxima eficácia e estabilidade, as funções PHP devem ser colocadas em um plugin Must-Use (`/wp-content/mu-plugins/security.php`) em vez de no `functions.php` do tema.

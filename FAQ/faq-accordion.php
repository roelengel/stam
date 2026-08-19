<?php
/**
 * FAQ-accordion component.
 *
 * Gebruik op een pagina:
 *   require_once '../../FAQ/index.php';        // laadt $all_faqs + get_faqs_by_category()
 *   require_once '../../FAQ/faq-accordion.php'; // laadt render_faq_accordion()
 *
 *   $faqs = get_faqs_by_category($all_faqs, ['fauteuils', 'algemeen']);
 *   render_faq_accordion($faqs);
 *
 * Alles zit in een functie, zodat interne variabelen (zoals $i en $item)
 * nooit botsen met variabelen elders op de pagina (bijv. de stoelen-lijst).
 */

function render_faq_accordion(array $faqs): void {

    if (empty($faqs)) {
        return; // niets te tonen, geen lege accordion of lege schema renderen
    }
    ?>

    <section class="faq-accordion" aria-label="Veelgestelde vragen">
        <h2 class="faq-accordion__title">Veelgestelde vragen</h2>

        <?php foreach ($faqs as $i => $item): ?>
            <div class="faq-item">
                <h3 class="faq-item__heading">
                    <button
                        type="button"
                        class="faq-question"
                        aria-expanded="false"
                        aria-controls="faq-answer-<?= $i ?>"
                        id="faq-question-<?= $i ?>"
                    >
                        <span><?= htmlspecialchars($item['q']) ?></span>
                        <span class="faq-question__icon" aria-hidden="true">+</span>
                    </button>
                </h3>
                <div
                    class="faq-answer"
                    id="faq-answer-<?= $i ?>"
                    role="region"
                    aria-labelledby="faq-question-<?= $i ?>"
                    hidden
                >
                    <p><?= $item['a'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <style>
    .faq-accordion {
        max-width: 800px;
        margin: 0 auto;
    }
    .faq-accordion__title {
        margin-bottom: 1rem;
    }
    .faq-item {
        border-bottom: 1px solid #e0e0e0;
    }
    .faq-question {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: left;
        background: none;
        border: none;
        padding: 1rem 0;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        color: inherit;
    }
    .faq-question__icon {
        flex-shrink: 0;
        margin-left: 1rem;
        font-size: 1.25rem;
        transition: transform 0.2s ease;
    }
    .faq-question[aria-expanded="true"] .faq-question__icon {
        transform: rotate(45deg);
    }
    .faq-answer {
        padding: 0 0 1rem 0;
    }
    .faq-answer p {
        margin: 0;
        line-height: 1.6;
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.faq-accordion .faq-question').forEach(function (button) {
            button.addEventListener('click', function () {
                var expanded = button.getAttribute('aria-expanded') === 'true';
                var answer = document.getElementById(button.getAttribute('aria-controls'));

                button.setAttribute('aria-expanded', String(!expanded));
                if (answer) {
                    answer.hidden = expanded;
                }
            });
        });
    });
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php foreach ($faqs as $i => $item): ?>
        {
          "@type": "Question",
          "name": <?= json_encode($item['q'], JSON_UNESCAPED_UNICODE) ?>,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": <?= json_encode(strip_tags($item['a']), JSON_UNESCAPED_UNICODE) ?>
          }
        }<?= $i < count($faqs) - 1 ? ',' : '' ?>
        <?php endforeach; ?>
      ]
    }
    </script>

    <?php
}
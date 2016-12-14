<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0464b9a753795da2b954d44ae29f4d4743d59589942f416e450649cddab6de0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fefaa8611e26957f7a0a815846a3191c32e2cabf4926d6ac7f5b8b4d26ec9d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefaa8611e26957f7a0a815846a3191c32e2cabf4926d6ac7f5b8b4d26ec9d6d->enter($__internal_fefaa8611e26957f7a0a815846a3191c32e2cabf4926d6ac7f5b8b4d26ec9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fefaa8611e26957f7a0a815846a3191c32e2cabf4926d6ac7f5b8b4d26ec9d6d->leave($__internal_fefaa8611e26957f7a0a815846a3191c32e2cabf4926d6ac7f5b8b4d26ec9d6d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4061d646f6e8be33062491520804b72198013c9b28e1120cb95dc3ae0c4cec8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4061d646f6e8be33062491520804b72198013c9b28e1120cb95dc3ae0c4cec8c->enter($__internal_4061d646f6e8be33062491520804b72198013c9b28e1120cb95dc3ae0c4cec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4061d646f6e8be33062491520804b72198013c9b28e1120cb95dc3ae0c4cec8c->leave($__internal_4061d646f6e8be33062491520804b72198013c9b28e1120cb95dc3ae0c4cec8c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a257e8497ca1994633861b61954283e9644847bef4a9008ed019aadf6ae836aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a257e8497ca1994633861b61954283e9644847bef4a9008ed019aadf6ae836aa->enter($__internal_a257e8497ca1994633861b61954283e9644847bef4a9008ed019aadf6ae836aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a257e8497ca1994633861b61954283e9644847bef4a9008ed019aadf6ae836aa->leave($__internal_a257e8497ca1994633861b61954283e9644847bef4a9008ed019aadf6ae836aa_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3e67b1521cd62a1851d35e26cefa9a9f6e01c9238fd8fd00107cb5d3db91f2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e67b1521cd62a1851d35e26cefa9a9f6e01c9238fd8fd00107cb5d3db91f2cf->enter($__internal_3e67b1521cd62a1851d35e26cefa9a9f6e01c9238fd8fd00107cb5d3db91f2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3e67b1521cd62a1851d35e26cefa9a9f6e01c9238fd8fd00107cb5d3db91f2cf->leave($__internal_3e67b1521cd62a1851d35e26cefa9a9f6e01c9238fd8fd00107cb5d3db91f2cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/sofiane/Bureau/MonSite/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}

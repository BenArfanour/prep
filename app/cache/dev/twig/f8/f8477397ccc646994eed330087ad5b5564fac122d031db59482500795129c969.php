<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_21357f4993a0b28df3bee6f511530c4efadd9c89ebe27ba343f361ea009008fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

    </head>
    <body>
        ";
        // line 9
        echo "            ";
        // line 10
        echo "                ";
        // line 11
        echo "                ";
        // line 12
        echo "                    ";
        // line 13
        echo "                ";
        // line 14
        echo "            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        ";
        // line 18
        echo "
        ";
        // line 20
        echo "            ";
        // line 21
        echo "                ";
        // line 22
        echo "                    ";
        // line 23
        echo "                        ";
        // line 24
        echo "                    ";
        // line 25
        echo "                ";
        // line 26
        echo "            ";
        // line 27
        echo "        ";
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  89 => 30,  79 => 32,  77 => 30,  73 => 28,  71 => 27,  69 => 26,  67 => 25,  65 => 24,  63 => 23,  61 => 22,  59 => 21,  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

    </head>
    <body>
        {#<div>#}
            {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                {#<a href=\"{{ path('fos_user_security_logout') }}\">#}
                    {#{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}#}
                {#</a>#}
            {#{% else %}#}
                {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
            {#{% endif %}#}
        {#</div>#}

        {#{% if app.request.hasPreviousSession %}#}
            {#{% for type, messages in app.session.flashbag.all() %}#}
                {#{% for message in messages %}#}
                    {#<div class=\"flash-{{ type }}\">#}
                        {#{{ message }}#}
                    {#</div>#}
                {#{% endfor %}#}
            {#{% endfor %}#}
        {#{% endif %}#}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/var/www/html/prep/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

<?php

/* install/install-step1.html */
class __TwigTemplate_fa675c191acc1e35757861e573f9d9c8 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headjavascript' => array($this, 'block_headjavascript'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("install/install-base.html");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_headjavascript($context, array $blocks = array())
    {
        echo "    ";
        // line 6
        $this->getParentBlock("headjavascript", $context, $blocks);
        echo "    <script type=\"text/javascript\" src=\"../js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/jquery.validate.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/i18n/jquery.validate-ru.js\"></script>
  ";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo "  ";
        // line 4
        $this->getParentBlock("head", $context, $blocks);
        echo "  ";
        // line 5
        $this->getBlock('headjavascript', $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        echo "<script type=\"text/javascript\">
\$(document).ready(function() { 
\t\$('.ValidatedForm').validate();
});
</script>
<form action=\"index.php\" method=\"post\" class=\"ValidatedForm\">
<input type=\"hidden\" name=\"step\" value=\"1\" />
<input type=\"hidden\" name=\"action\" value=\"save\" />
<table align=\"center\">
  <tr>
    <td colspan=\"2\" class=\"title\">Соединение с БД</td>
  </tr>
    <td>Сервер</td>
    <td><input type=\"text\" name=\"db_server\" value=\"";
        // line 27
        echo (isset($context['conf_db_host']) ? $context['conf_db_host'] : null);
        echo "\" class=\"required\" /></td>
  </tr>
  <tr>
    <td>Логин</td>
    <td><input type=\"text\" name=\"db_login\" value=\"";
        // line 31
        echo (isset($context['conf_db_user']) ? $context['conf_db_user'] : null);
        echo "\" class=\"required\" /></td>
  </tr>
  <tr>
    <td>Пароль</td>
    <td><input type=\"text\" name=\"db_passwd\" value=\"";
        // line 35
        echo (isset($context['conf_db_passwd']) ? $context['conf_db_passwd'] : null);
        echo "\" class=\"required\" /></td>
  </tr>
  <tr>
    <td>База данных</td>
    <td><input type=\"text\" name=\"db_name\" value=\"";
        // line 39
        echo (isset($context['conf_db_base']) ? $context['conf_db_base'] : null);
        echo "\" class=\"required\" /></td>
  </tr>
  <tr>
    <td colspan=\"2\">&nbsp;</td>
  </tr>
  <tr>
    <td colspan=\"2\" class=\"title\">ePochta SMS</td>
  </tr>
  <tr>
    <td>ePochta SMS - Логин</td>
    <td><input type=\"text\" name=\"epochtasms_login\" value=\"";
        // line 49
        echo (isset($context['conf_epochtasms_login']) ? $context['conf_epochtasms_login'] : null);
        echo "\"/></td>
  </tr>
  <tr>
    <td>ePochta SMS - Пароль</td>
    <td><input type=\"text\" name=\"epochtasms_passwd\" value=\"";
        // line 53
        echo (isset($context['conf_epochtasms_passwd']) ? $context['conf_epochtasms_passwd'] : null);
        echo "\"/></td>
  </tr>
  <tr>
    <td>ePochta SMS - Отправитель</td>
    <td><input type=\"text\" name=\"epochtasms_from\" value=\"";
        // line 57
        echo (isset($context['conf_epochtasms_from']) ? $context['conf_epochtasms_from'] : null);
        echo "\"/></td>
  </tr>
  <tr>
    <td colspan=\"2\">&nbsp;</td>
  </tr>

  <tr>
    <td colspan=\"2\" align=\"center\">
      <input type=\"submit\" value=\"Сохранить\" />
    </td>
  </tr>
</table>
</form>
";
    }

}

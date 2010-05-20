<?php if (!defined('IN_PHPBB')) exit; ?>Subject: phpBB instalado

Felicidades,

Phpbb está instalado correctamente en su servidor.

Este correo contiene información importante acerca del foro recién instalado. La contraseña fue encriptada en la base de datos y no podrá recuperarla, sin embargo puede solicitar que se le recuerde la contraseña, y recibirá un correo como éste.

----------------------------
Username: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>

Password: <?php echo (isset($this->_rootref['PASSWORD'])) ? $this->_rootref['PASSWORD'] : ''; ?>


URL del foro: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

Información útil sobre la instalación de su foro phpBB puede ser encontrada en las carpeta docs de su instalación y en la página oficial de soporte (en inglés) phpBB.com - http://www.phpbb.com/support/

Con idea de mantener su foro a salvo y seguro, se recomienda enormemente que se mantenga al día de la última versión, lo cuál se puede hacer fácilmente suscribiéndose a la lista de correo de phpBB.com, localizable en la URL de arriba.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>
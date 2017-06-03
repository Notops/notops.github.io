// Файл validator.js - функции для проверки вводимых пользователем данных
//
// Пример использования:
//	Вставьте между тегами <head> и </head>
//		<script type="text/JavaScript" src="<путь_до_файла>/validator.js"></script>
//
//	Оформите поля ввода следующим образом
//		Пароль: <input id="1p" type="text" name="str" title="Пароль" value="Обязательно введите пароль">
//
//	Оформите кнопку подтверждения формы следующим образом
//		<input id="null" type="submit" value="Отправить" onClick="return validate(this.form);">
//
//	Возможные значения поля 'id'
//		Первый символ:
//			1 - обязательное поле,
//			0 - необязательное поле
//		Второй символ:
//			i - целое число (Пример: "123"),
//			a - буквенно-цифровое значение (Пример: "проверка123"),
//			s - буквенное значение и знак подчеркивания (Пример: "проверка_test"),
//			t - текстовое значение (Пример: "проверка! №1."),
//			m - адрес email (Пример: "name@subdomain.domain"),
//			l - логин (Пример: "DNS"),
//			p - пароль (Пример: "123qwerty123"),
//			! - любые символы, возможна только проверка на обязательность (Пример: "проверка! №1."),
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>

// Определение необходимых переменных с настройками
var pass_len = 3;
var login_len = 3;

var bgcolor_error = "#FF9E9E";
var bgcolor_normal_1 = "#C0C0C0";
var bgcolor_normal_2 = "#C0C0C0";

// Определение необходимых массивов
var digit = "0123456789";
var lower_char_eng = "abcdefghijklmnopqrstuvwxyz";
var upper_char_eng = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var lower_char_rus = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
var upper_char_rus = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
var char = "/'\[]{}()*&^%$#@!~?<>-_+=|\\ \r\t\n.,:;";
var allow_char = "'[]()%!?-_ .,:«»" + '"';
var type_required = "01";
var type_fieldvalid = "ifastmlp!";

// Функция in_empty - Возвращает true если переданный параметр пуст
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_empty(str)
{
	return ((str == null) || (str.length == 0))
}

// Функция in_short - Возвращает true если длина str меньше необходимой
//
// param string str
// param integer len
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_short(str, len)
{
	len = (len == null) ? "1" : len;
	if (str.length < len)
	{
		return true;
	}
	else
	{
		return false;
	}
}

// Функция in_valid - Возвращает true если все правильно
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_valid(str, value)
{
	for (i = 0; i < str.length; i++)
	{
		if (value.indexOf(str.charAt(i), 0) == -1)
			return false;
	}
	return true;
}

// Функция in_password - Возвращает true если все правильно
// Второй символ id = p
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_password(str)
{
	if ((!in_short(str, pass_len)) && (in_valid(str, digit + lower_char_eng + upper_char_eng + lower_char_rus + upper_char_rus + "/'\[]{}()*&^%$#@!~?<>-_+=|\\.,")))
	{
		return true;
	}
	else
	{
		return false;
	}
}

// Функция in_login - Возвращает true если все правильно
// Второй символ id = l
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_login(str)
{
	if ((!in_short(str, login_len)) && ((in_valid(str, digit + lower_char_eng + upper_char_eng + lower_char_rus + upper_char_rus + allow_char)) && (in_valid(str.charAt(0), lower_char_eng + upper_char_eng + lower_char_rus + upper_char_rus))))
	{
		return true;
	}
	else
	{
		return false;
	}
}

// Функция in_integer - Возвращает true если все правильно
// Второй символ id = i
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_integer(str)
{
	return in_valid(str, digit);
}

// Функция in_alphanumeric - Возвращает true если все правильно
// Второй символ id = a
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_alphanumeric(str)
{
	return in_valid(str, lower_char_eng + upper_char_eng + lower_char_rus + upper_char_rus + digit);
}

// Функция in_string - Возвращает true если все правильно
// Второй символ id = s
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_string(str)
{
	return in_valid(str, lower_char_eng + upper_char_eng + lower_char_rus + upper_char_rus + allow_char);
}

// Функция in_text - Возвращает true если все правильно
// Второй символ id = t
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_text(str)
{
	return in_valid(str, lower_char_eng + upper_char_eng + lower_char_rus + upper_char_rus + digit + allow_char + char);
}

// Функция in_mail - Возвращает true если все правильно
// Второй символ id = m
//
// param string str
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_mail(str)
{
	reg = /^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i;
	return reg.test(str);
}

// Функция in_set_bg - Назначает фон элемента
//
// param object frm
// param integer i
// param string type
// return none
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_set_bg(frm, i, type)
{
	switch (type)
	{
		case 'normal':
			if (frm.elements[i].type.substring(0, 6) != "select")
			{
				frm.elements[i].style.background = bgcolor_normal_1;
			}
			else
			{
				frm.elements[i].style.background = bgcolor_normal_2;
			}
		break;

		case 'error':
			frm.elements[i].style.background = bgcolor_error;
		break;

		default: break;
	}
}

// Функция in_get_title - Выдает название поля, если название не указано возвращает имя
//
// param object frm
// param integer i
// return string
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_get_title(frm, i)
{
	title = frm.elements[i].title;

	if (title == "")
		title = frm.elements[i].name;

	return title;
}

// Функция in_alert - Выдает текст ошибки
//
// param object frm
// param integer i
// param string type
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function in_alert(frm, i, type)
{
	title = in_get_title(frm, i);
	switch (type)
	{
		case 'required': str = "Поле <" + title + "> является обязательным для заполнения!\nПожалуйста заполните необходимое поле " + title + "."; break;
		case 'i': str = "Поле <" + title + "> должно иметь целое числовое значение!\nПожалуйста введите правильное значение."; break;
		case 'p': str = "Длина значения поля <" + title + "> должна быть не менее " + pass_len + " символов!\nПожалуйста введите правильное значение."; break;
		case 'l': str = "Длина значения поля <" + title + "> должна быть не менее " + login_len + " символов и значение должно начинаться с буквы!\nПожалуйста введите правильное значение."; break;
		case 'a': str = "Поле <" + title + "> должно иметь буквенно-цифровое значение!\nПожалуйста введите правильное значение."; break;
		case 's': str = "Поле <" + title + "> должно иметь буквенное значение и(или) знак подчеркивания!\nПожалуйста введите правильное значение."; break;
		case 't': str = "Поле <" + title + "> должно иметь текстовое значение!\nПожалуйста введите правильное значение."; break;
		case 'm': str = "Поле <" + title + "> должно иметь значение в формате e-mail!\nПожалуйста введите правильное значение."; break;
		default: return false; break;
	}

	alert(str);
	frm.elements[i].focus();
	in_set_bg(frm, i, 'error');

	if (frm.elements[i].type.substring(0, 6) != "select")
	{
		frm.elements[i].select();
	}

	return false;
}

// Функция validate - Возвращает true если все правильно
//
// param object frm
// return boolean
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
function validate(frm)
{
	field_required = "";
	field_type = "";

	for (ind = 0; ind < frm.elements.length; ind++)
	{
		field_required = frm.elements[ind].id.charAt(0);
		field_type = frm.elements[ind].id.charAt(1);
		field_true = true;

		if ((in_valid(field_required, type_required) && in_valid(field_type, type_fieldvalid)) && (frm.elements[ind].style.display != "none"))
		{
			field_value = frm.elements[ind].value;
			if (field_required == '1')
			{
				if (in_empty(field_value))
				{
					return in_alert(frm, ind, 'required');
				}
				else
				{
					in_set_bg(frm, ind, 'normal');
				}
			}
			if ((field_required == '1') || (field_required == '0' && !in_empty(field_value)))
			{
				switch (field_type)
				{
					case 'i':
						if (!in_integer(field_value))
						{
							field_true = false;
						}
					break;

					case 'p':
						if (!in_password(field_value))
						{
							field_true = false;
						}
					break;

					case 'l':
						if (!in_login(field_value))
						{
							field_true = false;
						}
					break;

					case 'a':
						if (!in_alphanumeric(field_value))
						{
							field_true = false;
						}
					break;

					case 's':
						if (!in_string(field_value))
						{
							field_true = false;
						}
					break;

					case 't':
						if (!in_text(field_value))
						{
							field_true = false;
						}
					break;

					case 'm':
						if (!in_mail(field_value))
						{
							field_true = false;
						}
					break;

					default: break;
				}

				if (!field_true)
					return in_alert(frm, ind, field_type);
			}
		}
	}

	return true;
}
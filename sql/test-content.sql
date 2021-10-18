INSERT INTO `manufacturer` (`name`) VALUES
('Opel'),
('Mercedes');

INSERT INTO `model` (`name`, `manufacturer_id`) VALUES
('Mondeo', 1),
('Alfa', 2);

INSERT INTO `car` (`model_id`, `chassis_number`) VALUES
(1, '1357'),
(1, '123456'),
(2, '654321'),
(2, '1234'),
(2, 'create'),
(1, 'added'),
(2, 'moment');


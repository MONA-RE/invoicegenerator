--
-- Uncomment and run the script to declare triggers to be used by the agenda module for automatic logging of events into agenda (table llx_actioncomm).
--
-- For example
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_DRAFT', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_CREATE', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_VALIDATE', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_MODIFY', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_ACCEPT', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_DENIED', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_REOPEN', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_UNVALIDATE', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- INSERT INTO `llx_c_action_trigger` (`rowid`, `elementtype`, `code`, `label`, `description`, `rang`) VALUES (NULL, 'invoicegenerator', 'MYCLASSNAME_SENTBYMAIL', 'MYCLASSNAME create', 'A MYCLASSNAME is created', '0000000');
-- 


--ADD Call trigger IN TABLE
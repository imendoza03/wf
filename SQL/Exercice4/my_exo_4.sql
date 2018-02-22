use test;
ALTER TABLE address_person ADD CONSTRAINT foreign key (addressId) references address(id);
ALTER TABLE address_person ADD CONSTRAINT foreign key (personId) references person(id);
ALTER TABLE address_person ADD CONSTRAINT foreign key (address_typeId) references address_type(id);
ALTER TABLE address ADD CONSTRAINT foreign key (townId) references town(id);
ALTER TABLE town ADD CONSTRAINT foreign key (countryId) references country(id);

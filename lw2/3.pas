PROGRAM PaulRevere(INPUT, OUTPUT);
USES DOS;
VAR
  Query: STRING;
  Lanterns: CHAR;
  I: INTEGER;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;

  Query := GetEnv('QUERY_STRING');
  Lanterns := '-';
  IF (Length(Query) > 0)
  THEN
    BEGIN
      I := POS('=', Query) + 1;
      IF I > 1
      THEN
        Lanterns := Query[I];
    END;

  {Issue Paul Revere's message}
  IF (Lanterns > '0') AND (Lanterns < '3')
  THEN
    WRITE('The British are coming by ');
    IF Lanterns = '1'
    THEN
      WRITELN('land.')
    ELSE IF Lanterns = '2'
    THEN
      WRITELN('sea.')
  ELSE
    WRITELN('The North Church shows only ''', Lanterns, '''.');
END. {PrintHello}


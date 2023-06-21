# function that checks if a string is a valid time in the hh:mm format
# returns True if valid, False if not
def valid_time(time_str):
    # time_str is of type string
    # check if time_str is a valid time in the hh:mm format
    # return True if valid, False if not
    # example valid times: 12:00, 23:59, 00:00
    # example invalid times: 25:00, 00:60, 00:00:00, 00:00:00:00, 00:00:00:00:00
    if len(time_str) != 5:
        return False
    if time_str[2] != ':':
        return False
    try:
        hours = int(time_str[0:2])
        minutes = int(time_str[3:5])
    except ValueError:
        return False
    if hours < 0 or hours > 23:
        return False
    if minutes < 0 or minutes > 59:
        return False
    return True


print(valid_time("12:00"))
print(valid_time("23:59"))
print(valid_time("00:100"))
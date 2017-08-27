for _ in xrange(int(raw_input())):
    n, k = map(int, raw_input().split())
    a = k - 1
    b = ~a & -~a
    if a | b > n:
        print a - 1
    else:
        print a


Sizes = {'L': 6.00, 'XL': 10.00}
Toppings = {1: 1.00, 2: 1.75, 3: 2.50, 4: 3.35}
Hst_rate = 0.13

# Get valid size input
while True:
    size = input("Pizza size (L/XL): ").upper()
    if size in Sizes:
        break
    print("Invalid size! Please enter L or XL")

# Get valid number of toppings
while True:
    try:
        toppings = int(input("Number of toppings (1-4): "))
        if 1 <= toppings <= 4:
            break
        print("Please enter a number between 1 and 4")
    except ValueError:
        print("Please enter a valid number")

subtotal = Sizes[size] + Toppings[toppings]
tax = subtotal * Hst_rate
total = subtotal + tax

print(f"Subtotal: ${subtotal:.2f}")
print(f"Tax: ${tax:.2f}")
print(f"Total: ${total:.2f}")
import { ChildrenProp } from "@/types"

function MainContent({children}:ChildrenProp) {
    return(
        <div>{children}</div>
    )
}

export { MainContent }
